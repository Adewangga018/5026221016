<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\DosenController;

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

Route::get('error', function () {
    return "<h1>Server Error : Ada kesalahan di server</h1>";
});


Route::get('/blog','App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('/pegawai/{nama}', 'App\Http\Controllers\PegawaiController@index');
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

// Tugas

Route::get('hello','App\Http\Controllers\MeetController@hello');
Route::get('style','App\Http\Controllers\MeetController@style');
Route::get('style1','App\Http\Controllers\MeetController@style1');
Route::get('responsive','App\Http\Controllers\MeetController@responsive');
Route::get('form','App\Http\Controllers\MeetController@form');
Route::get('linktreeTask','App\Http\Controllers\MeetController@linktreeTask');
Route::get('testimoniTask','App\Http\Controllers\MeetController@testimoniTask');

Route::get('index','App\Http\Controllers\MeetController@index');
Route::get('index/help','App\Http\Controllers\MeetController@help');
Route::get('index/account','App\Http\Controllers\MeetController@account');
Route::get('index/contactUs','App\Http\Controllers\MeetController@contactUs');
Route::get('index/legalNotices','App\Http\Controllers\MeetController@legalNotices');

Route::get('index/hello','App\Http\Controllers\MeetController@hello');
Route::get('index/style','App\Http\Controllers\MeetController@style');
Route::get('index/style1','App\Http\Controllers\MeetController@style1');
Route::get('index/responsive','App\Http\Controllers\MeetController@responsive');
Route::get('index/form','App\Http\Controllers\MeetController@form');
Route::get('index/linktreeTask','App\Http\Controllers\MeetController@linktreeTask');
Route::get('index/testimoniTask','App\Http\Controllers\MeetController@testimoniTask');