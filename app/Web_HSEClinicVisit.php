<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web_HSEClinicVisit extends Model
{
	protected $table = 'web_hseclinicvisits';
    protected $fillable = [
        'title',
		'description',	
    ];
}
