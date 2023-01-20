<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';
    protected $fillable = [
        'title',
        'description',
        'price',
        'sales_date'
    ];
}
