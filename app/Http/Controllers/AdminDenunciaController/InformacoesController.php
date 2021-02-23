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

    
    public function exibe(Request $request, $id){
        //$data = Denuncia::find($id - env('MASK_ID'));
        //return redirect()->route('exibeInformacaoDenuncia',['data'=> $data->id + env('MASK_ID') ]);
        //return view('AdminDenunciaView.exibeInformacaoDenuncia',['data'=>$id->id - env('MASK_ID')]);  
       // return redirect()->route('exibeInformacaoDenuncia');  

       //$data = Denuncia::find($id - env('MASK_ID'));
        $data = Denuncia::find($id);
        return view('AdminDenunciaView.exibeInformacaoDenuncia',['data'=>$data]); 
       // return redirect()->route('exibeInformacaoDenuncia');  
    }
}

