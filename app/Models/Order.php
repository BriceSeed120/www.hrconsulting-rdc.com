<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email','phone', 'address','room', 'adult', 'child','discount','startdate','endDate' ,'amount','quantity','total_ammount','tax','service_charge','arrival_time','additional_comment','postal_code','city','status','transaction_id','currency'];
}
