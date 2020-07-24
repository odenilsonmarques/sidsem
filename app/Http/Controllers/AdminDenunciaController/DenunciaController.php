<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function adiciona(){
        return view('AdminDenunciaView.adicionaDenuncia');
    }
    public function adicionaAction(Request $request){ 

        $request->validate([
            'crime'=>['required','string'],
            'descricao'=>['required','string','min:20'],
            'infrator'=>['required','string','min:5'],
            'bairro'=>['required','string','min:5'],
            'rua'=>['required','string','min:4'],
            'denunciante'=>['required','string','min:10'],
            'telefone'=>['required','string'],
            'email'=>['required','string'],
            'cpf'=>['required','string']
            
        ]);

        $crime = $request->input('crime');
        $descricao = $request->input('descricao');
        $infrator = $request->input('infrator');
        $bairro = $request->input('bairro');
        $rua = $request->input('rua');
        //$anexos = $request->input('anexos');
        $denunciante = $request->input('denunciante');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $cpf = $request->input('cpf');
        

        $data = new Denuncia();
        $data-> crime = $crime;
        $data-> descricao = $descricao;
        $data-> infrator = $infrator;
        $data-> bairro = $bairro;
        $data-> rua = $rua;
       // $data ->anexos = $anexos;
        $data-> denunciante = $denunciante;
        $data-> telefone = $telefone;
        $data-> email = $email;
        $data-> cpf = $cpf;
        
        $data ->save();
        return redirect()->route('exibeInformacao')
        ->with('SucessoCad','Sua denuncia foi salva com sucesso!');
    }
}
