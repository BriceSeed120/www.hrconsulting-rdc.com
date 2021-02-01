<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinings extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id','description', 'property_label', 'feature_image', 'gallery','rate_in_bdt','rate_in_usd','property_list'];
}
