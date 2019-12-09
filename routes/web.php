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
Route::get('/', function () { return view('auth.login'); });
Route::get('/index', function () { return view('home.index'); });
Route::get('/report', function () { return view('reports.report'); });
Route::get('/new_report', function () { return view('reports.new_report'); });
Route::get('/received', function () { return view('reports.received'); });
Route::get('/sent', function () { return view('reports.sent'); });
Route::get('/scheduled', function () { return view('reports.scheduled'); });
Route::get('/sample', function () { return view('reports.sample'); });
Route::get('/create', function () { return view('metrics.create'); });
Route::get('/create1', function () { return view('metrics.'); });
Route::get('/files', function () { return view('files.files'); });
Route::get('/file_upload', function () { return view('files.file_upload'); });
Route::get('/archives', function () { return view('archives.archives'); });
Route::get('/add_chart', function () { return view('home.add_chart'); });
Route::get('/reports', function () { return view('reports.all_reports'); });
Route::get('/create_metrics', function () { return view('metrics.create'); });
Route::get('/add_metrics', function () { return view('metrics.add'); });
Route::get('/contacts', function () { return view('contact.contacts'); });
Route::get('/add_contact', function () { return view('contact.add_contact'); });
Route::get('/add_company', function () { return view('portfolio_company.add_company'); });
Route::get('/dashboard', function () { return view('home.dashboard'); });
Route::get('/new_company', function () { return view('portfolio_company.new_company'); });
Route::get('/add_company', function () { return view('portfolio_company.add_company'); });
Route::get('/dashboard1', function () { return view('home.dashboard1'); });
Route::get('/add_chart1', function () { return view('home.add_chart1'); });







Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('company_store', 'companyController');