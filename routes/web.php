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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Student routes
Route::get('/portals/student/index', [
    'uses' => 'StudentsController@index',
    'as' => 'portals.student.index'
]);

Route::get('/portals/student/announcement', [
    'uses' => 'StudentsController@announcement',
    'as' => 'portals.student.announcement'
]);

Route::get('/portals/student/grade', [
    'uses' => 'StudentsController@grade',
    'as' => 'portals.student.grade'
]);

Route::get('/portals/student/profile', [
    'uses' => 'StudentsController@profile',
    'as' => 'portals.student.profile'
]);

Route::get('/portals/student/register', [
    'uses' => 'StudentsController@register',
    'as' => 'portals.student.register'
]);

Route::get('/portals/student/report', [
    'uses' => 'StudentsController@report',
    'as' => 'portals.student.report'
]);
