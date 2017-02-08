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
    return view('login');
});

Route::get('/sign_up', [
    'uses' => 'UserController@indexSignUp',
    'as' => 'sign_up'
]);

Route::post('/sign_up',[
    'uses' => 'UserController@postSignUp',
    'as' => 'sign_up'
]);

Route::get('/dashboard',function(){
    return view('layouts/dashboard');
});
