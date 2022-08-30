<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable =[
    'title',
    'thumb',
    'description',
    'series',
    'type',
    'sale_date',
    'price'
    ];

}
