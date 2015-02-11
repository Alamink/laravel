<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('login', array('uses'=>'HomeController@showWelcome'));
Route::post('login', array('uses'=>'HomeController@login'));

Route::get('/registrar', array('uses'=>'HomeController@showRegistrar'));
Route::post('/registrar', array('uses'=>'HomeController@register'));


// static page
Route::get('about',function(){
    return View::make('about');
});
Route::get('registrar',function(){
    return View::make('registrar');
});

Route::get('',function(){
    return Redirect::to('login');
});