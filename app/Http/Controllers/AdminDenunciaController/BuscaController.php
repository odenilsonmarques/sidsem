<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;

use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function busca(){
        $search = filter_input(INPUT_GET,'search');
        $lista = Denuncia::select()->where('crime','like',''.$search.'%')->orWhere('infrator','like',''.$search.'%')->orWhere('descricaoStatus','like',''.$search.'%')->get(); 
        return view('AdminDenunciaView.listaDenuncia',['lista'=>$lista]);
    }
}
