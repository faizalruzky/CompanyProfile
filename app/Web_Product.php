<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web_Product extends Model
{
    protected $table = 'web_products';
    protected $fillable = [
        'name',
		'price',	
    ];
}
