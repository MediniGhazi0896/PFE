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

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');



Route::get('users/add', 'UserController@addUser')->name('add-user')->middleware('auth');


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::post('send','MailController@send');
Route::post('SaveUser','UserController@SaveUser');
Route::get('/users/confirm/{access_key}', 'UserController@showConfirmPage');
Route::post('/users/confirm/', 'UserController@confirm');
Route::get('/users/list/', 'UserController@listAll')->name('user-list')->middleware('auth');
Route::get('/users/update/{id}','UserController@ShowUserUpdatePage')->middleware('auth')->name('update-user');
Route::post('/users/update/Info', 'UserController@updateInfo');
Route::post('/users/update/{id}','UserController@UpdateUser');
Route::put('/users/update/passwd', 'UserController@updatePasswd');
Route::get('/api/users', 'UserController@findAllJson')->name('find_all_json')->middleware('cors');
Route::put('/api/users', 'UserController@UpdateUserJson')->name('update_json')->middleware('cors');
Route::get('/users/view' , 'UserController@view')->middleware('auth');


Route::post('/users/find', 'UserController@FindUser')->middleware('auth');
Route::get('/users/find', 'UserController@ShowSearchPage')->name('Search-user')->middleware('auth');
Route::delete('delete/{id}', 'UserController@destroy');
Route::post('Desactivate/{id}','UserController@StatusChange');
//Route::get('/users/list', 'UserController@destroy');






Route::post('/corps/create', 'CorpsController@createCorp')->middleware('auth');
Route::get('/corps/add', 'CorpsController@showCreationPage')->middleware('auth');
Route::get('/corps', 'CorpsController@showListPage')->middleware('auth');
Route::get('/corps/{id}', 'CorpsController@showUpdatePage')->middleware('auth');
Route::post('/corps/update', 'CorpsController@updateCorp');

Route::get('/missions','MissionController@showMissionsList')->name('missions-list')->middleware('auth');
Route::get('/missions/{id}','ReportController@showReportForm')->name('report-form')->middleware('auth');

Route::get('/api/missions/finish/{id}','MissionController@finishMissionJson')->name('finish-mission')->middleware('cors');

Route::put('api/report/{id}','ReportController@updateReport')->name('report-update')->middleware('cors');


// auditor Routes !!! : 

Route::post('/audit/create' , 'AuditorController@createAuditor')->middleware('auth');
Route::get('/audit/add' , 'AuditorController@showCreationPage')->middleware('auth');
Route::get('/audit/list' , 'AuditorController@showListPage')->middleware('auth');


// Form Routes : !!!
// 1 : upload PDF form 
Route::post('/form/upload' , 'AuditorController@uploadform');
Route::get('/form/upload' , 'AuditorController@showuploadformpage')->name('upload-form')->middleware('auth');

// 2 : Form Download Routes 
// 
Route::get('/form/Download' , 'AuditorController@showDownloadformpage')->middleware('auth');
Route::post('/form/Download', 'AuditorController@exportPDF');

// 3: Moral Person Routes
Route::get('/form/Moral' ,'AuditorController@showMoralformpage')->name('moral-form')->middleware('auth');
Route::post('/form/Moral' , 'AuditorController@submitMoralform');
Route::get('/form/Moral/{id}', 'AuditorController@showUpdateMoralPage')->middleware('auth');
Route::post('/form/update', 'AuditorController@updateMoral');

Route::get('/Moral/Conditions', 'AuditorController@ShowStep2Moral');
Route::post('/Moral/Conditions', 'AuditorController@SubmitStep2Moral');


// 4 : Physical Person Routes : 
Route::get('/form/Physical' , 'AuditorController@showPhysicalformpage')->name('physical-form')->middleware('auth');
Route::post('/form/Physical' , 'AuditorController@submitPhysicalform');
Route::get('/form/Physical/{id}', 'AuditorController@showUpdatePhysicalPage')->middleware('auth');
Route::post('/form/physical/update', 'AuditorController@updatePhysical')->middleware('auth');

Route::get('/Physical/Conditions', 'AuditorController@ShowStep2Physical');
Route::post('/Physical/Conditions', 'AuditorController@SubmitPhysicalConditions');
