<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/qr', function () {
    return view('qrcode');
});

Route::get('/financial','FinancialController@index')->middleware('auth');

Route::get('/rdv_postkmproprio','RdvController@rdv_postkmproprio')->middleware('auth');

Route::get('/post_rdv', 'RdvController@rdvpost_aereas_brasil')->middleware('auth');

Route::get('/post_rdv_ext', 'RdvController@rdvpost_aereas_externas')->middleware('auth');

Route::get('/post_rdv_taxi','RdvController@rdvpost_taxi')->middleware('auth');

Route::get('/post_rdv_estacionamento','RdvController@rdvpost_estacionamento')->middleware('auth');

Route::get('/post_rdv_combustivel','RdvController@rdvpost_combustivel')->middleware('auth');

Route::get('/post_rdv_correio','RdvController@rdvpost_correio')->middleware('auth');

Route::get('/post_rdv_telefone','RdvController@rdvpost_telefone')->middleware('auth');

Route::get('/post_rdv_hospedagem_brasil','RdvController@rdvpost_hospedagem_brasil')->middleware('auth');

Route::get('/post_rdv_hospedagem_exterior','RdvController@rdvpost_hospedagem_exterior')->middleware('auth');

Route::get('/post_rdv_convite','RdvController@rdvpost_convite')->middleware('auth');

Route::get('/post_rdv_refeicoes','RdvController@rdvpost_refeicoes')->middleware('auth');

Route::get('/post_rdv_presentes','RdvController@rdvpost_presentes')->middleware('auth');

Route::get('/post_rdv_veiculos','RdvController@rdvpost_veiculos')->middleware('auth');

Route::get('/post_rdv_outras_viagens','RdvController@rdvpost_outras_viagens')->middleware('auth');

Route::get('/post_rdv_outras','RdvController@rdvpost_outras')->middleware('auth');

Route::get('/rdv_ext_post','RelatorioController@rdv_ext_post')->middleware('auth');

Route::get('/post_edit','EditController@store')->name('edit')->middleware('auth');

Route::get('/home','RdvRetrieveController@retrieve')->name('home')->middleware('auth');

Route::get('/mobile','RdvRetrieveController@retrieve1')->name('mobile')->middleware('auth');

Route::get('/edit/{semana_retrieve?}',['uses'=>'EditController@retrieve'])->name('edit')->middleware('auth');

Route::get('/relatorio/{semana_mes?}',['uses'=>'RelatorioController@retrieve'])->name('relatorio')->middleware('auth');

Route::get('/test','testController@PDFGENERATOR')->middleware('auth');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth');

Route::get('/bug','BugController@index')->name('bug')->middleware('auth');

Route::get('/bugreport','BugController@store')->middleware('auth');

Route::get('/suggestion','SuggestionController@index')->name('suggestion')->middleware('auth');

Route::get('/suggestion_store','SuggestionController@store')->middleware('auth');

Route::get('/checkout/{nome_funcionario?}/{semana_mes?}',['uses'=>'CheckoutController@retrieve'])->name('checkout')->middleware('auth');

Route::get('/checkout_post','CheckoutController@rdv_ext_post')->middleware('auth');

Route::get('/ext_post_checkout','CheckoutController@store')->middleware('auth');

Route::get('/aprovados/{semana_mes?}','AprovadosController@retrieve')->name('aprovados')->middleware('auth');

