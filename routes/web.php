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

Route::get('/test',function(){
	return "Hello";
});

Route::get('/datafile',function(){
	return "datafile";
});

//Route Parameter 

Route::get('/user/{id}',function($id){

	return "user ".$id;
});	

Route::get('/user/{id}/comment/{comment}',function($id,$comment){
	return "User ".$id." comment ".$comment;
});