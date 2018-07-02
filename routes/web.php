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
Route::get('/account/change-password', 'ChangePasswordController@ChangePassword')->name('change-password');
Route::Post('/account/change-bank-info', 'BankAccountController@store')->name('change-bank-info');


Route::get('/account/send-money', 'SendMoney@index')->name('sendmoney');

/*Admin Routes*/

Route::get('/admin', function (){
    $users = User::all();
    return view('admin.index', compact('users'));
})->name('admin-controller');


/*Surport tickets*/


Route::get('/account/new-ticket', 'SurportController@create');
Route::post('/account/new-ticket', 'SurportController@store');

Route::resource('/admin/users', 'AdminUsersController', ['name' => 'admin-controller']);
Route::post('/admin/users/change-password', 'AdminUsersController@changepassword', ['name' => 'admin-change-password']);
Route::get('/admin/users/change-password', 'AdminUsersController@changepassword', ['name' => 'admin-change-password']);
