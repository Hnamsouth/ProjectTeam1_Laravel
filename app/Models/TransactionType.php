<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    const TRANSFERS=1;
    const ATM_WITHDRAWAL=2;
    const PAY_BILL=3;
    const PAY_POS=4;
    const SAVING_DEPOSIT=5;

    use HasFactory;
    protected $table='transaction_type';
    protected  $fillable=[
        'name',
        'code'
    ];
    public function Transactions(){
        return $this->belongsTo(Transactions::class);
    }
}
