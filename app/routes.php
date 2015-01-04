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
	return View::make('users.login');
});

/*Route::get('/db', function()
{
    return DB::select('select database()');
});
*/

Route::post('users/signin', 'UserController@postSignin');

Route::get('users/logout', 'UserController@getLogout');

Route::get('users/dashboard', 'UserController@getDashboard');

Route::resource('contactTypes', 'ContactTypeController');

Route::resource('customerContacts', 'CustomerContactController');

Route::resource('customers', 'CustomerController');

Route::resource('industries', 'IndustryController');

Route::resource('notes', 'NoteController');

Route::resource('topicCategories', 'TopicCategoryController');

Route::resource('users', 'UserController');

Route::resource('userTypes', 'UserTypeController');
