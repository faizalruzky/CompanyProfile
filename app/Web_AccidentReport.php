<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Web_AccidentReport extends Model
{

	protected $table ='WEB_ACCREPORTS';

    protected $fillable = [
        'title',
        'january_sa',
            'january_a',
            'january_i',
            'february_sa',
            'february_a',
            'february_i',
            'march_sa',
            'march_a',
            'march_i',
            'april_sa',
            'april_a',
            'april_i',
            'may_sa',
            'may_a',
            'may_i',
            'june_sa',
            'june_a',
            'june_i',
            'july_sa',
            'july_a',
            'july_i',
            'august_sa',
            'august_a',
            'august_i',
            'september_sa',
            'september_a',
            'september_i',
            'october_sa',
            'october_a',
            'october_i',
            'november_sa',
            'november_a',
            'november_i',
            'december_sa',
            'december_a',
            'december_i',
		
    ];
}
