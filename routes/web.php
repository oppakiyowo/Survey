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
    Route::get('/kel-kp-bulang', 'HomeController@kp_bulang')->name('kp_bulang');

    Route::get('/rekap-kel-air-raja', 'RekapController@rekap_air_raja')->name('rekap_air_raja');
    Route::get('/rekap-kel-bukit-cermin', 'RekapController@rekap_bukit_cermin')->name('rekap_bukit_cermin');
    Route::get('/rekap-kel-batu-ix', 'RekapController@rekap_batu_ix')->name('rekap_batu_ix');
    Route::get('/rekap-kel-dompak', 'RekapController@rekap_dompak')->name('rekap_dompak');
    Route::get('/rekap-kel-kamboja', 'RekapController@rekap_kamboja')->name('rekap_kamboja');
    Route::get('/rekap-kel-kampung-baru', 'RekapController@rekap_kampung_baru')->name('rekap_kampung_baru');
    Route::get('/rekap-kel-kampung_bugis', 'RekapController@rekap_kampung_bugis')->name('rekap_kampung_bugis');
    Route::get('/rekap-kel-kampung_bulang', 'RekapController@rekap_kampung_bulang')->name('rekap_kampung_bulang');
    Route::get('/rekap-kel-melayu_kota_piring', 'RekapController@rekap_melayu_kota_piring')->name('rekap_melayu_kota_piring');
    Route::get('/rekap-kel-penyengat', 'RekapController@rekap_penyengat')->name('rekap_penyengat');
    Route::get('/rekap-kel-pinang_kencana', 'RekapController@rekap_pinang_kencana')->name('rekap_pinang_kencana');
    Route::get('/rekap-kel-sei_jang', 'RekapController@rekap_sei_jang')->name('rekap_sei_jang');
    Route::get('/rekap-kel-senggarang', 'RekapController@rekap_senggarang')->name('rekap_senggarang');
    Route::get('/rekap-kel-tanjung_ayun_sakti', 'RekapController@rekap_tanjung_ayun_sakti')->name('rekap_tanjung_ayun_sakti');
    Route::get('/rekap-kel-tanjung_pinang_barat', 'RekapController@rekap_tanjung_pinang_barat')->name('rekap_tanjung_pinang_barat');
    Route::get('/rekap-kel-tanjung_pinang_kota', 'RekapController@rekap_tanjung_pinang_kota')->name('rekap_tanjung_pinang_kota');
    Route::get('/rekap-kel-tanjung_pinang_timur', 'RekapController@rekap_tanjung_pinang_timur')->name('rekap_tanjung_pinang_timur');
    Route::get('/rekap-kel-tanjung_unggat', 'RekapController@rekap_tanjung_unggat')->name('rekap_tanjung_unggat');



    Route::resource('surveyors', 'SurveyorController');
    Route::resource('villages', 'VillageController');
    Route::resource('surveys', 'SurveyController');
    Route::resource('users', 'UserController');
    Route::get('/changepassword', 'UserController@changepassword')->name('users.changepassword');
    Route::post('/changePassword','UserController@updatepassword')->name('updatepassword');


 });
