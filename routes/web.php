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

Route::get('/rpp', 'RppController@index');
Route::post('/rpp/create', 'RppController@create');
Route::get('/rpp/{id}/edit', 'RppController@edit');
Route::post('/rpp/{id}/update', 'RppController@update');
Route::get('/rpp/{id}/delete', 'RppController@delete');

Route::get('/jadwal', 'JadwalController@index');
Route::post('/jadwal/create', 'JadwalController@create');
Route::get('/jadwal/{id}/edit', 'JadwalController@edit');
Route::post('/jadwal/{id}/update', 'JadwalController@update');
Route::get('/jadwal/{id}/delete', 'JadwalController@delete');


Route::get('/supervisor', 'SupervisorController@index');
Route::get('/supervisor/{id}/edit', 'SupervisorController@edit');
Route::post('/supervisor/{id}/update', 'SupervisorController@update');
Route::get('/supervisor/{id}/delete', 'SupervisorController@delete');

Route::get('/kurikulum', 'KurikulumController@index');
Route::post('/kurikulum/create', 'KurikulumController@create');
Route::get('/kurikulum/{id}/edit', 'KurikulumController@edit');
Route::post('/kurikulum/{id}/update', 'KurikulumController@update');
Route::get('/kurikulum/{id}/delete', 'KurikulumController@delete');

Route::get('/kepsek', 'KepsekController@index');

Route::get('/guru', 'GuruController@index');
Route::post('/guru/create', 'GuruController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
