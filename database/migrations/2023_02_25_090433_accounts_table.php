<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->unsignedBigInteger('account_number')->unique();
            $table->unsignedDecimal('balance',16,4);
            $table->date('open_date');
            $table->tinyInteger('status');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('account_type');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('account_type')->references('id')->on('account_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
