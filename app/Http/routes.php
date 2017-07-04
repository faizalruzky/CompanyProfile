<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
*/

Route::resource('web_hseclinicvisits', 'Web_HSEClinicVisitsController');

Route::resource('jj/web_accidentreports', 'Dashboard\Web_AccidentReportsController');
// Route::get('jj/web_accidentreports', 'Dashboard\Web_AccidentReportsController@index');
// Route::post('jj/web_accidentreports', 'Dashboard\Web_AccidentReportsController@store');
// Route::get('jj/web_accidentreports/create', 'Dashboard\Web_AccidentReportsController@create');
// Route::put('jj/web_accidentreports/{id}', 'Dashboard\Web_AccidentReportsController@update');
// Route::delete('jj/web_accidentreports/{id}', 'Dashboard\Web_AccidentReportsController@destroy');
// Route::get('jj/web_accidentreports/{id}', 'Dashboard\Web_AccidentReportsController@show');
// Route::get('jj/web_accidentreports/{id}/edit', 'Dashboard\Web_AccidentReportsController@edit');