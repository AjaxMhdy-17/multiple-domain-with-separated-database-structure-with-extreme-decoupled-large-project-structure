<?php

namespace Domains\Shop\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $connection = 'shop_db'; 
    // protected $table = 'categories'; 

    protected $fillable = ['category_name'];
}