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
    return view('Register');
});

Route::get('/register','RegisterController@create');
Route::post('/process','RegisterController@create_post');
Route::get('/view-register','RegisterController@get');
Route::get('/view-register','RegisterController@get');

//Route::get('/view-register','MahController@get');
//Route::get('/edit-mahasiswa/{id}','MahasiswaController@edit')->name('edit');
//Route::post('/edit-mahasiswa/{id}','MahasiswaController@edit_post');
//Route::post('/delete-mahasiswa/{id}','MahasiswaController@delete')->name('delete');


# Confirmation Page
//Route::get('/delete-success', 'PageController@deleteSuccess');