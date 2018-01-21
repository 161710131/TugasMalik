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

Route::get('tugashalaman1', function(){
	return view('template.master');
});

Route::get('tugashalaman2', function(){
	return view('template.master2');
});

Route::get('tugashalaman3', function(){
	return view('template.master3');
});

Route::get('tugashalaman4', function(){
	return view('template.master4');
});

Route::get('tugashalaman5', function(){
	return view('template.master5');
});