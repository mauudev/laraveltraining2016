<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola',function(){
	return view('hola');
});

Route::get('/test',function(){
	return view('test');
});

Route::get('/prueba',function(){
	return view('test');
});

Route::post('/prueba',function(){
	return view('testpost');
});

Route::resource('/estudiante','MiControlador');

