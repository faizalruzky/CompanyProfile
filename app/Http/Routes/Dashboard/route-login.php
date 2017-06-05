<?php 
Route::get('/jj/login','Auth\AuthController@showLoginForm');
Route::post('/jj/login','Auth\AuthController@login');