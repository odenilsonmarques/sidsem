<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;

use Illuminate\Http\Request;

class InformacoesController extends Controller
{
    /*
    public function exibe($id){
        $dados = Denuncia::all()->sortByDesc('id')->first();
        //$dados = Denuncia::where('id')->get(); 
        return view('AdminDenunciaView.exibeInformacaoDenuncia',['dados'=>$dados]);   
    }*/

    /*
    public function exibe($id){
        $dados = Denuncia::find($id);
        return view('AdminDenunciaView.exibeInformacaoDenuncia',['dados'=>$dados]);   
    }
    */

    
    public function exibe (Request $id){
        $dados = Denuncia::find($id);
        return view('AdminDenunciaView.exibeInformacaoDenuncia',['dados'=>$dados]);  
    }
}

