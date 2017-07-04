<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Web_AccidentReport;

class HSE_AccidentReportsController extends Controller
{
    public function index()
    {
        return view('public/home.home');
    }
    public function show()
    {
    	$pastel=Web_AccidentReport::orderBy('id','desc')
    	->take(1)
    	->get();
    	return view('public/hse_accidentreports.accidentreport',['pastel'=>$pastel]);
    }
}
