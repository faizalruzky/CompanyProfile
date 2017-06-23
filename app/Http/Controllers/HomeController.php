<?php

namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\AccidentReport;

class HomeController extends Controller
{
    public function index()
    {
        return view('public/home.home');
    }
    public function testchart()
    {
    	$pastel=DB::table('web_seriousaccidents as a')
        ->join('web_accidents as b','a.id','=','b.id')
        ->join('web_incidents as c','b.id','=','c.id')
    	->select(
            'a.January as ajanuary',
            'a.February as afebruary',
            'a.March as amarch',
            'a.April as aapril',
            'a.May as amay',
            'a.June as ajune',
            'a.July as ajuly',
            'a.August as aaugust',
            'a.September as aseptember',
            'a.October as aoctober',
            'a.November as anovember',
            'a.December as adecember',

            'b.january as bjanuary',
            'b.february as bfebruary',
            'b.March as bmarch',
            'b.April as bapril',
            'b.May as bmay',
            'b.June as bjune',
            'b.July as bjuly',
            'b.August as baugust',
            'b.September as bseptember',
            'b.October as boctober',
            'b.November as bnovember',
            'b.December as bdecember',

            'c.january as cjanuary',
            'c.february as cfebruary',
            'c.March as cmarch',
            'c.April as capril',
            'c.May as cmay',
            'c.June as cjune',
            'c.July as cjuly',
            'c.August as caugust',
            'c.September as cseptember',
            'c.October as coctober',
            'c.November as cnovember',
            'c.December as cdecember')
        ->get();
    	return view('public.accidentreport',['pastel'=>$pastel]);
    }
}
