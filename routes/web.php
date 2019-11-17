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

Route::get('/', function () { return view('welcome'); });
Route::get('/report', function () { return view('reports.report'); });
Route::get('/new', function () { return view('reports.new_report'); });
Route::get('/received', function () { return view('reports.received'); });
Route::get('/sent', function () { return view('reports.sent'); });
Route::get('/scheduled', function () { return view('reports.scheduled'); });
Route::get('/sample', function () { return view('reports.sample'); });


Route::get('/', function () { return view('welcome'); });

Route::get('/create', function () { return view('metrics.create'); });
Route::get('/create1', function () { return view('metrics.'); });
Route::get('/', function () { return view('welcome'); });
