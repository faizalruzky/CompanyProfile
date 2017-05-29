<?php 
Route::GET('/administratorc51/register','Auth\AuthController@showRegistrationForm');
Route::POST('/administratorc51/register','Auth\AuthController@register');