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

Route::get('/','AdminDenunciaController\HomeController@index');

//onde tem controledenuncia, trocar para denuncia
Route::prefix('controledenuncia')->group(function(){

    Route::get('adicionaDenuncia','AdminDenunciaController\DenunciaController@adiciona')->name('adicionaDenuncia');
    Route::post('adicionaDenuncia','AdminDenunciaController\DenunciaController@adicionaAction');

    Route::get('exibeInformacao','AdminDenunciaController\InformacoesController@exibe')->name('exibeInformacao');

    Route::get('pdf','AdminDenunciaController\PdfController@exibePdf')->name('pdf');

});