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

Route::get('/','AdminDenunciaController\HomeController@index')->name('/');

//onde tem controledenuncia, trocar para denuncia
Route::prefix('controledenuncia')->group(function(){

    Route::get('adicionaDenuncia','AdminDenunciaController\DenunciaController@adiciona')->name('adicionaDenuncia');
    Route::post('adicionaDenuncia','AdminDenunciaController\DenunciaController@adicionaAction');

    Route::get('exibeInformacaoDenuncia','AdminDenunciaController\InformacoesController@exibe')->name('exibeInformacaoDenuncia');

    Route::get('pdf','AdminDenunciaController\PdfController@exibePdf')->name('pdf');

    Route::get('listaDenuncia','AdminDenunciaController\DenunciaController@lista')->name('listaDenuncia');

    Route::get('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@edita')->name('editaDenuncia');
    Route::Post('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@editaAction');
});