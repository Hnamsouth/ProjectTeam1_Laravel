<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benefitciaries extends Model
{
    use HasFactory;
    protected $table='beneficiaries';
    protected  $fillable=[
        'user_id',
        'name',
        'account_number',
        'routing_number',
    ];
}
