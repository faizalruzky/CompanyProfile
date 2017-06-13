<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Web_Producttotal;

class HomeController extends Controller
{
    public function index()
    {
        return view('public/home.home');
    }
    public function testchart()
    {
    	$pastel=DB::table('web_products')->join('web_producttotals','web_products.id','=','web_producttotals.id')
    	->select('web_products.name','web_producttotals.total')->get();
    	return view('public.accidentreport',['pastel'=>$pastel]);
    }
}
