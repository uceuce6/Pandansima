<?php

use Illuminate\Support\Facades\Route;

Route::get('/v1', 'DashboardController@v1');
Route::get('/v2', 'DashboardController@v2');

Route::get('/', 'DashboardController@v1');

Route::get('awal', 'SimaController@index');
Route::get('sima/search', 'SimaController@search')->name('sima.search');
Route::get('tema/{id}', 'SimaController@tema');
Route::get('kap/{id}', 'SimaController@kap');
Route::get('kapexcel/{id}', 'SimaController@kapexcel')->name('kapexcel');
Route::get('lihat/{id}', 'SimaController@lihat');
Route::get('perwakilan', 'SimaController@perwakilan');
Route::get('kf1_pwk/{id}', 'SimaController@kf1_pwk');

Route::get('upload/{id}', 'UploadController@upload');
Route::post('upload/proses', 'UploadController@proses_upload');

Route::get('show_file_upload/{id}','UploadController@show_data');
Route::get('/download{file}','UploadController@download');
// Route::get('preview/{id}', 'UploadController@preview');
// Route::get('upload/{id}', 'UploadController@download');

Route::get('file/download/{id}', 'UploadController@download');
Route::get('show_upload/{id}', 'UploadController@show_data');


// Route::get('preview', 'UploadController@preview');
