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
})->name('temp.index');

Auth::routes();

Route::group(['prefix'=>'admin', 'middleware'=>'auth', 'namespace' => 'Admin'], function(){
	Route::get('/', 'AdminController@index')->name('home');
	Route::get('/email', 'SchedulesController@create')
		->name('create.schedule');
	Route::post('/send', 'SchedulesController@sendManualNotification')
		->name('send.manual.notification');
	Route::post('/calendar/set', 'CalendarsController@setEvents')
		->name('calendar.set.events');
	Route::get('/calendar/create', 'CalendarsController@createEvent')
		->name('calendar.create.event');
	Route::get('/calendar/get', 'CalendarsController@getEvents')
		->name('calendar.get.events');
	Route::get('/calendar/delete', 'CalendarsController@deleteEvents')
		->name('calendar.delete.events');
});

Auth::routes();