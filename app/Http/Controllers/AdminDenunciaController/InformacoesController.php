<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;

use Illuminate\Http\Request;

class InformacoesController extends Controller
{
    public function exibe(Request $id){
        $dados = Denuncia::all()->sortByDesc('id')->first();
        return view('AdminDenunciaView.exibeInformacaoDenuncia',['dados'=>$dados]);
    }
}
