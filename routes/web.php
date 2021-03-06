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

/*
Route::get('/','AdminDenunciaController\HomeController@index')->name('/');

//onde tem controledenuncia, trocar para denuncia
Route::prefix('controledenuncia')->group(function(){

    Route::get('adicionaDenunciante','AdminDenunciaController\DenuncianteController@adiciona')->name('adicionaDenunciante');
    Route::post('adicionaDenunciante','AdminDenunciaController\DenuncianteController@adicionaAction');

    Route::get('adicionaDenuncia','AdminDenunciaController\DenunciaController@adiciona')->name('adicionaDenuncia');
    Route::post('adicionaDenuncia','AdminDenunciaController\DenunciaController@adicionaAction');

    Route::get('exibeInformacaoDenuncia/{data}','AdminDenunciaController\InformacoesController@exibe');
    //Route::get('exibeInformacaoDenuncia/{id}','AdminDenunciaController\InformacoesController@exibe');
  
    //Route::get('pdf','AdminDenunciaController\PdfController@exibePdf')->name('pdf');
    Route::get('pdf','AdminDenunciaController\PdfController@exibePdf')->name('pdf');

    Route::get('listaDenuncia','AdminDenunciaController\DenunciaController@lista')->name('listaDenuncia');

    Route::get('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@edita')->name('editaDenuncia');
    Route::Post('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@editaAction');

    Route::get('listaDenuncia','AdminDenunciaController\BuscaController@busca')->name('listaDenuncia');
});
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

Route::get('/cadDenuncia','AdminDenunciaController\DenunciaController@cadastrar')->name('cadDenunciaCadastrar');
Route::post('/cadDenuncia','AdminDenunciaController\DenunciaController@cadastrarAction');


Route::get('/cadTeste','AdminDenunciaController\DenunciaController@testar')->name('cadTesteTestar');
Route::post('/cadTeste','AdminDenunciaController\DenunciaController@testarAction');
Route::get('/listaTeste','AdminDenunciaController\DenunciaController@lista')->name('listaTesteLista');


Route::get('/exibeInformacao','AdminDenunciaController\DenunciaController@exibe')->name('exibeInfomacaoExibe');
//Route::post('/cadDenuncia','AdminDenunciaController\DenunciaController@cadastrarAction');

Route::get('/listaDenuncias','AdminDenunciaController\DenunciaController@listar')->name('listaDenunciasListar');

//Route::get('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@editar')->name('editaDenunciaEditar');
//Route::post('editaDenuncia/{id}','AdminDenunciaController\DenunciaController@editarAction');

Route::get('detalhesDenuncia/{id}','AdminDenunciaController\DenunciaController@detalhar')->name('detalhesDenunciaDetalhar');

Route::get('/', function(){
    return view('AdminViews.welcome');
});

