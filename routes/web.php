<?php
use Illuminate\Http\Request;

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

// http://localhost:8000/user/10/comment/testvalue
Route::get('/user/{id}/comment/{comment}',function($id,$comment){
	return "User ".$id." comment ".$comment;
});

Route::get('name/{name?}',function($name = "Test"){

	return "Username : ".$name;
});

Route::get('test/{data}',function($data){
	return "$data";
})->where('data','[A-Za-z]+');


Route::get('checkuser',function(Request $request){

	return printf( $request->user());
});

Route::get('user123/{id}', 'UserController@show');

Route::get('role',[
   'middleware' => 'Role:roletee',
   'uses' => 'TestController@index',
]);

Route::get('terminate',[
   'middleware' => 'terminate',
   'uses' => 'ABCController@index',
]);

Route::get('profile', [
   'middleware' => 'auth',
   'uses' => 'UserController@showProfile'
]);


Route::get('/usercontroller2/path',[
   'middleware' => 'First',
   'uses' => 'UserController2@showPath'
]);

Route::resource('my','MyController');


Route::get('/insert','StudInsertController@insertform');
Route::post('/create','StudInsertController@insert');
Route::get('/view-records','StudViewController@index');

Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');

Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy');