<?php

use Illuminate\Support\Facades\Route;

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


route::get('cvs','App\Http\Controllers\CvController@index');
route::get('cvs/{id}/show','App\Http\Controllers\CvController@show');
route::get('cvs/{id}/sho','App\Http\Controllers\CvController@sho');
route::get('cvs/create','App\Http\Controllers\CvController@create');
route::post('cvs','App\Http\Controllers\CvController@store');
route::get('cvs/{id}/edit','App\Http\Controllers\CvController@edit');
route::put('cvs/{id}','App\Http\Controllers\CvController@update');
route::delete('cvs/{id}','App\Http\Controllers\CvController@destroy');
route::get('/getexperiences', 'App\Http\Controllers\CvController@getExperiences');


/*
route::post('/addexperience', 'App\Http\Controllers\CvController@addExperience');*/

/*Route::resource('cvs', 'App\Http\Controllers\CvController');
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


