<?php

use App\Address;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/account', 'HomeController@index')->name('account.index');
Route::resource('/account/edit-profile', 'AccountEditController', ['name' => 'edit-profile']);


Route::get('/verify/token/{token}', 'Auth\VerificationController@verify')->name('auth.verify');
Route::get('/verify/resend', 'Auth\VerificationController@resend')->name('auth.verify.resend');
Route::get('/logout', 'Auth\loginController@logout')->name('logout');

Route::post('/account/change-password', 'ChangePasswordController@ChangePassword')->name('change-password');
