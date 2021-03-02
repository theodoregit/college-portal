<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/portals/student/courses', [
    'uses' => 'StudentsController@courses',
    'as' => 'portals.student.courses'
]);

Route::get('/portals/student/grade', [
    'uses' => 'StudentsController@grade',
    'as' => 'portals.student.grade'
]);

Route::get('/portals/student/profile', [
    'uses' => 'StudentsController@profile',
    'as' => 'portals.student.profile'
]);

Route::get('/portals/student/evaluation', [
    'uses' => 'StudentsController@evaluation',
    'as' => 'portals.student.evaluation'
]);

Route::get('/portals/student/register', [
    'uses' => 'StudentsController@register',
    'as' => 'portals.student.register'
]);

Route::get('/portals/student/report', [
    'uses' => 'StudentsController@report',
    'as' => 'portals.student.report'
]);


//instructor routes

//instructor's profile view route
Route::get('/portals/instructor/profile', [
    'uses' => 'InstructorsController@index',
    'as' => 'portals.instructor.profile'
]);
//instructor's profile editing page route
Route::get('/portals/instructor/profile/edit/{id}', [
    'uses' => 'InstructorsController@edit',
    'as' => 'instructor.edit'
]);
Route::post('/portals/instructor/profile/update/{id}', [
    'uses' => 'InstructorsController@update',
    'as' => 'instructor.update'
]);



//grade submit page by the instructor
Route::get('/portals/instructor/grade/create', [
    'uses' => 'InstructorsGradeController@create',
    'as' => 'instructor.grade.create'
]);
//fiiled grade summited by this route
Route::get('/portals/instructor/grade/store', [
    'uses' => 'InstructorsGradeController@store',
    'as' => 'instructor.grade.store'
]);
Route::get('/portals/instructor/grade/edit/{id}', [
    'uses' => 'InstructorsGradeController@edit',
    'as' => 'instructor.grade.edit'
]);
Route::get('/portals/instructor/grade/update/{id}', [
    'uses' => 'InstructorsGradeController@edit',
    'as' => 'instructor.grade.update'
]);