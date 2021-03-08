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
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.sumbit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});



Route::group(['prefix' => 'portals/student'], function(){
    Route::get('/login', 'Auth\StudentLoginController@showLoginForm')->name('portals.student.login');
    Route::post('/login', 'Auth\StudentLoginController@login')->name('portals.student.login.sumbit');
    Route::get('/logout', 'Auth\StudentLoginController@logout')->name('portals.student.logout');

    Route::get('/index', [
        'uses' => 'StudentsController@index',
        'as' => 'portals.student.index'
    ]);
    
    Route::get('/announcement', [
        'uses' => 'StudentsController@announcement',
        'as' => 'portals.student.announcement'
    ]);
    
    Route::get('/courses', [
        'uses' => 'StudentsController@courses',
        'as' => 'portals.student.courses'
    ]);
    
    Route::get('/grade/{id}', [
        'uses' => 'StudentsController@grade',
        'as' => 'portals.student.grade'
    ]);
    
    Route::get('/profile', [
        'uses' => 'StudentsController@profile',
        'as' => 'portals.student.profile'
    ]);
    
    Route::get('/evaluation', [
        'uses' => 'StudentsController@evaluation',
        'as' => 'portals.student.evaluation'
    ]);
    
    Route::get('/register/{id}', [
        'uses' => 'StudentsController@register',
        'as' => 'portals.student.register'
    ]);
    Route::post('/register-course/{id}', [
        'uses' => 'StudentsController@registerCourse',
        'as' => 'portals.student.register-course'
    ]);
    
    Route::get('/report', [
        'uses' => 'StudentsController@report',
        'as' => 'portals.student.report'
    ]);

});


Route::group(['prefix' => 'portals/registrar'], function(){
    Route::get('/login', 'Auth\RegistrarLoginController@showLoginForm')->name('portals.registrar.login');
    Route::post('/login', 'Auth\RegistrarLoginController@login')->name('portals.registrar.login.sumbit');
    Route::get('/logout', 'Auth\RegistrarLoginController@logout')->name('portals.registrar.logout');

    // ->middleware('auth:registrar');
    Route::get('/index', [
        'uses' => 'RegistrarController@index',
        'as' => 'portals.registrar.index'
    ]);
    
    Route::get('/register', [
        'uses' => 'RegistrarController@register',
        'as' => 'portals.registrar.register'
    ]);
    
    Route::post('/student-history', [
        'uses' => 'RegistrarController@recordHistory',
        'as' => 'portals.registrar.student-history'
    ]);
    
    Route::post('/create-account', [
        'uses' => 'RegistrarController@createAccount',
        'as' => 'portals.registrar.create-account'
    ]);
    
    Route::get('/account', [
        'uses' => 'RegistrarController@account',
        'as' => 'portals.registrar.account'
    ]);
    
    Route::get('/manage', [
        'uses' => 'RegistrarController@manage',
        'as' => 'portals.registrar.manage'
    ]);
    
    Route::get('/rades', [
        'uses' => 'RegistrarController@grade',
        'as' => 'portals.registrar.grades'
    ]);
    
    Route::get('/evaluations', [
        'uses' => 'RegistrarController@evaluation',
        'as' => 'portals.registrar.evaluations'
    ]);
    
    Route::get('/announcement', [
        'uses' => 'RegistrarController@announcement',
        'as' => 'portals.registrar.announcement'
    ]);
    
    Route::get('/students', [
        'uses' => 'RegistrarController@students',
        'as' => 'portals.registrar.students'
    ]);
    
    Route::get('/student/{id}', [
        'uses' => 'RegistrarController@student',
        'as' => 'portals.registrar.student'
    ]);
    
    Route::get('/edit/{id}', [
        'uses' => 'RegistrarController@editHistory',
        'as' => 'portals.registrar.edit'
    ]);
    
    Route::post('/student-history-update/{id}', [
        'uses' => 'RegistrarController@updateHistory',
        'as' => 'portals.registrar.student-history-update'
    ]);
    
    Route::post('/account-create/{id}', [
        'uses' => 'RegistrarController@createAccount',
        'as' => 'portals.registrar.account-create'
    ]);
    
    Route::post('/announcement', [
        'uses' => 'RegistrarController@createAnnouncement',
        'as' => 'portals.registrar.announcement'
    ]);
});


Route::group(['prefix' => 'portals/instructor'], function(){
    Route::get('/login', 'Auth\InstructorLoginController@showLoginForm')->name('portals.instructor.login');
    Route::post('/login', 'Auth\InstructorLoginController@login')->name('portals.instructor.login.sumbit');
    Route::get('/logout', 'Auth\InstructorLoginController@logout')->name('portals.instructor.logout');

    Route::get('/profile', [
        'uses' => 'InstructorsController@profile',
        'as' => 'portals.instructor.profile'
    ]);
    
    Route::get('/grade', [
        'uses' => 'InstructorsController@create',
        'as' => 'portals.instructor.grade'
    ]);
    
    Route::get('/index', [
        'uses' => 'InstructorsController@index',
        'as' => 'portals.instructor.index'
    ]);
    
});








Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
