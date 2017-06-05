
<?php 
Route::get('/jj/password/reset/{token?}','Auth\PasswordController@showResetForm');
Route::post('/jj/password/email','Auth\PasswordController@sendResetLinkEmail');
Route::post('/jj/password/reset','Auth\PasswordController@reset');