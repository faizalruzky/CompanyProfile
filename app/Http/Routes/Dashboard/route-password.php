
<?php 
Route::get('/administratorc51/password/reset/{token?}','Auth\PasswordController@showResetForm');
Route::post('/administratorc51/password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('/administratorc51/password/reset','Auth\PasswordController@reset');