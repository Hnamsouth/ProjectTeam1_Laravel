<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TransactionsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions_history', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('transaction_code')->unique();
            $table->unsignedBigInteger('to_account_number');
            $table->unsignedDecimal('amount',12,3);
            $table->unsignedDecimal('fees',12,4)->nullable();
            $table->tinyInteger('status');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('transaction_type'); //
            $table->unsignedBigInteger('from_account_number');
            $table->foreign('from_account_number')->references('account_number')->on('accounts');
            $table->foreign('transaction_type')->references('id')->on('transaction_type');
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
        Schema::dropIfExists('transactions');
    }
}
