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
Route::group(['middleware' => 'guest'], function(){
    Route::get('/', function () {
        return view('login');
    });

    Route::post('/sign_in',[
        'uses' => 'UserController@postSignIn',
        'as' => 'sign_in'
    ]);

    Route::get('/sign_up', [
        'uses' => 'UserController@indexSignUp',
        'as' => 'sign_up'
    ]);

    Route::post('/sign_up',[
        'uses' => 'UserController@postSignUp',
        'as' => 'sign_up'
    ]);

});


Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/',[
            'uses' => 'RestitutionController@getAllRestitution',
            'as' => '/'
        ]);

        Route::get('/new', [
            'uses' => 'RestitutionController@newRestitution',
            'as' => 'new'
        ]);

        Route::post('/create', [
            'uses' => 'RestitutionController@createRestitution',
            'as' => 'create'
        ]);

        Route::get('/update/{id}', [
            'uses' => 'RestitutionController@updateRestitution',
        ]);
    });

    Route::group(['prefix' => 'home'], function () {
         Route::get('/user={id}',[
            'uses' => 'RestitutionController@showRestitution',
        ]);
    });

     Route::get('sign_out', [
        'uses' => 'UserController@getLogout',
        'as' => 'sign_out'
    ]);

});
    
