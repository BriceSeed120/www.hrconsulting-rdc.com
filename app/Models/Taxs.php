<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxs extends Model
{
    use HasFactory;
    protected $fillable = ['tax','vat','services_charge'];
}
