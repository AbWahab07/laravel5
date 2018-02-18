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


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
*/


Route::get('/', 'PagesController@index');

Route::get('about', 'PagesController@about');


// Route::model('song', 'App\Song'); // Route Model Binding
Route::bind('music', function ($handle){
    return App\Song::whereHandle($handle)->first(); // Returns a single record based on the handle
});

/*
Route::get('songs', 'SongsController@index');

get('songs/{song}', 'SongsController@show');
// named route get('songs/{song}', [ 'as' => 'song_path' , 'uses' => 'SongsController']);

get('songs/{song}/edit', 'SongsController@edit');

patch('songs/{song}', 'SongsController@update');
*/

Route::Resource('music', 'SongsController', [
    'only' => [
        'index', 'show', 'edit', 'create', 'store', 'destroy'
        ],
    'names' => [
        'index' => 'songs_path',
        'show' => 'song_path',
        'edit' => 'song_edit_path'
    ]
]);

Route::Resource('people', 'PeopleController');