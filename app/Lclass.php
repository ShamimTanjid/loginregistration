<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lclass extends Model
{
    protected $fillable = [
        'class_name', 'class_id', 'section',
    ];
}
