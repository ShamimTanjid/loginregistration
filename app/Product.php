<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'Product_name', 'Product_Code', 'Product_Image','Product_Buy_Date',
    ];
}
