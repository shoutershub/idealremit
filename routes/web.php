<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account.index');
Route::resource('/account/edit-profile', 'AccountEditController', ['name' => 'edit-profile']);

Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
Route::get('/logout', 'Auth\loginController@logout')->name('logout');

