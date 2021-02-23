<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denunciante;

use Illuminate\Http\Request;

class DenuncianteController extends Controller
{
    public function realizar(){
        return view('AdminViews.adicionaDenunciante');
    }
    public function adicionaAction(Request $request){
        $request->validate ([
            'nome'=>['required','string','min:5','max:30'],
            'telefone'=>['required','string'],
            'cpf'=>['required','string'],
        ]);
        $nome = $request->input('nome');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        $data = new Denunciante();
        $data-> nome = $nome;
        $data-> telefone = $telefone;
        $data-> email = $email;
        $data-> cpf = $cpf;
        $data->save();
        return redirect()->route('adicionaDenuncia');
    }
}
