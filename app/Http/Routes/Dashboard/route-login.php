<?php 
Route::get('/administratorc51/login','Auth\AuthController@showLoginForm');
Route::post('/administratorc51/login','Auth\AuthController@login');