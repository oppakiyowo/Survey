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
    return redirect('/login');
});
Auth::routes(['register' => false]);




Route::middleware(['auth'])->group(function()

 {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/kel-dompak', 'HomeController@dompak')->name('dompak');
    Route::get('/kel-batu-ix', 'HomeController@batu_ix')->name('batu_ix');


    Route::get('/rekap-kel-dompak', 'RekapController@rekap_dompak')->name('rekap_dompak');

    Route::resource('surveyors', 'SurveyorController');
    Route::resource('villages', 'VillageController');
    Route::resource('surveys', 'SurveyController');
    Route::resource('users', 'UserController');
    Route::get('/changepassword', 'UserController@changepassword')->name('users.changepassword');
    Route::post('/changePassword','UserController@updatepassword')->name('updatepassword');


 });
