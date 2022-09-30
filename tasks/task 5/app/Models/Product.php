<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name_en','name_ar','price','code','quantity','status',
    'image','brand_id','subcategory_id','details_en','details_ar'];
}
