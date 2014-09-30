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

Route::get('/', function()
{
	return View::make('hello');
});
Route::resource('users', 'UserController');

Route::get('tags', function()
{
  return Response::json(Tag::all());
});
Route::get('tags/create', function()
{
  $tag = Input::get('name');
	return Tag::create(array('name' => $tag));
});
