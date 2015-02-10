<?php

/*
|--------------------------------------------------------------------------
| Facebook Login App Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//start of the routes
Route::get('/', function(){
    return View::make('home');
});

Route::get('/home/login',[ 'as' => 'login', 'uses' => 'FacebookController@login']);

Route::get('/login/fb/callback',['as' => 'callback', 'uses' => 'FacebookController@callback']);




