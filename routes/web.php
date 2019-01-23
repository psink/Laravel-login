<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group([
    'prefix' => 'dashboard',
    'middleware' => 'checkAdminLogin']
    ,function(){
        Route::get('/', 'User\UserController@dashboard');

    }
);


Route::group([
        'middleware' => 'checkUserLogin']
    ,function(){
        Route::get('/home', 'User\UserController@home');

    }
);

Route::get('/admin-register-page', 'User\UserController@adminRegisterPage')->name('adminRegister');
Route::post('/admin-register', 'User\UserController@userRegister')->name('adminRegister');
Route::get('/admin-login-page', 'User\UserController@adminLoginPage');
Route::post('/admin-login', 'User\UserController@login')->name('adminLogin');


Route::get('/user-register-page', 'User\UserController@userRegisterPage');
Route::post('/user-register', 'User\UserController@userRegister')->name('userRegister');
Route::get('/user-login-page', 'User\UserController@userLoginPage');
Route::get('/user-logout', 'User\UserController@userLogout')->name('userLogout');
Route::post('/user-login', 'User\UserController@login')->name('userLogin');



Route::get('/login/facebook', 'User\UserController@facebookredirectToProvider')->name('facebook');
Route::get('/login/facebook/callback', 'User\UserController@facebookhandleProviderCallback');

Route::get('/login/google', 'User\UserController@googleredirectToProvider')->name('google');
Route::get('/login/google/callback', 'User\UserController@googlehandleProviderCallback');