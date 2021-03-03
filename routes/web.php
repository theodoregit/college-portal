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



//registrar routes
Route::get('/portals/registrar/index', [
    'uses' => 'RegistrarController@index',
    'as' => 'portals.registrar.index'
]);

Route::get('/portals/registrar/register', [
    'uses' => 'RegistrarController@register',
    'as' => 'portals.registrar.register'
]);

Route::post('/portals/registrar/student-history', [
    'uses' => 'RegistrarController@recordHistory',
    'as' => 'portals.registrar.student-history'
]);

Route::post('/portals/registrar/create-account', [
    'uses' => 'RegistrarController@createAccount',
    'as' => 'portals.registrar.create-account'
]);

Route::get('/portals/registrar/account', [
    'uses' => 'RegistrarController@account',
    'as' => 'portals.registrar.account'
]);

Route::get('/portals/registrar/manage', [
    'uses' => 'RegistrarController@manage',
    'as' => 'portals.registrar.manage'
]);

Route::get('/portals/registrar/grades', [
    'uses' => 'RegistrarController@grade',
    'as' => 'portals.registrar.grades'
]);

Route::get('/portals/registrar/evaluations', [
    'uses' => 'RegistrarController@evaluation',
    'as' => 'portals.registrar.evaluations'
]);

Route::get('/portals/registrar/announcement', [
    'uses' => 'RegistrarController@announcement',
    'as' => 'portals.registrar.announcement'
]);

Route::get('/portals/registrar/students', [
    'uses' => 'RegistrarController@students',
    'as' => 'portals.registrar.students'
]);

Route::get('/portals/registrar/student/{id}', [
    'uses' => 'RegistrarController@student',
    'as' => 'portals.registrar.student'
]);


//instructor routes

//instructor's profile view route
Route::get('/portals/instructor/profile', [
    'uses' => 'InstructorsController@index',
    'as' => 'portals.instructor.profile'
]);
//instructor's profile editing page route
// Route::get('/portals/instructor/profile/edit/{id}', [
//     'uses' => 'InstructorsController@edit',
//     'as' => 'instructor.edit'
// ]);
// Route::post('/portals/instructor/profile/update/{id}', [
//     'uses' => 'InstructorsController@update',
//     'as' => 'instructor.update'
// ]);
// //grade submit page by the instructor
// Route::get('/portals/instructor/grade/create', [
//     'uses' => 'InstructorsGradeController@create',
//     'as' => 'instructor.grade.create'
// ]);
// //fiiled grade summited by this route
// Route::get('/portals/instructor/grade/store', [
//     'uses' => 'InstructorsGradeController@store',
//     'as' => 'instructor.grade.store'
// ]);
// Route::get('/portals/instructor/grade/edit/{id}', [
//     'uses' => 'InstructorsGradeController@edit',
//     'as' => 'instructor.grade.edit'
// ]);
// Route::get('/portals/instructor/grade/update/{id}', [
//     'uses' => 'InstructorsGradeController@edit',
//     'as' => 'instructor.grade.update'
// ]);
