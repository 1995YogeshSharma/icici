<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//redirecting to the events main page
Route::get('/events', function()
{
	return view('events');

});


//redirecting to the selfie challenge main page
Route::get('/selfie', function()
{
	return view('selfie');
});


//redirecting to image upload page
Route::get('/imageUploadForm', 'ImageController@upload');

//redirecting the form post to store method
Route::post('/imageUploadForm','ImageController@store');

//showing the list of the stored images (later to be converted to admin side feature
Route::get('/showLists', 'ImageController@show');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
