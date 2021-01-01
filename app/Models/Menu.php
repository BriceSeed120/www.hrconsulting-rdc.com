<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'user_id','description', 'meta_title', 'meta_description', 'meta_keyword','menu_order','thumbnail','attachment'];
}
