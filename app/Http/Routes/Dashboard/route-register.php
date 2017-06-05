<?php 
Route::GET('/jj/register','Auth\AuthController@showRegistrationForm');
Route::POST('/jj/register','Auth\AuthController@register');