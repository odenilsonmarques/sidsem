<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function lista(){
        $lista = Denuncia::all();
        return view('AdminDenunciaView.listaDenuncia',['lista'=>$lista]);
    }

    public function adiciona(){
        return view('AdminDenunciaView.adicionaDenuncia');
    }
    public function adicionaAction(Request $request){ 

        $request->validate([
            'crime'=>['required','string'],
            'descricao'=>['required','string','min:15'],
            'infrator'=>['required','string','min:5'],
            'bairro'=>['required','string','min:5'],
            'rua'=>['required','string','min:4'],
            'status'=>['required','string'],
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
        $status = $request->input('status');
        $denunciante = $request->input('denunciante');
        $telefone = $request->input('telefone');
        $email = $request->input('email');
        $cpf = $request->input('cpf');

        if($request->hasFile('anexoUm') && $request->anexoUm->isValid()){
            $anexoUm = $request->file('anexoUm')->store('imagens');
        }else if ($request->hasFile('anexoUm') == null){
            $anexoUm = '';
        }

        if($request->hasFile('anexoDois') && $request->anexoDois->isValid()){
            $anexoDois = $request->file('anexoDois')->store('imagens');
        }else if ($request->hasFile('anexoDois') == null){
            $anexoDois = '';
        }

        if($request->hasFile('anexoTres') && $request->anexoTres->isValid()){
            $anexoTres = $request->file('anexoTres')->store('imagens');
        }else if ($request->hasFile('anexoTres') == null){
            $anexoTres = '';
        }

        $data = new Denuncia();
        $data-> crime = $crime;
        $data-> descricao = $descricao;
        $data-> infrator = $infrator;
        $data-> bairro = $bairro;
        $data-> rua = $rua;
        $data-> status = $status;
        $data -> anexoUm = $anexoUm;
        $data -> anexoDois = $anexoDois;
        $data -> anexoTres = $anexoTres;
        $data-> denunciante = $denunciante;
        $data-> telefone = $telefone;
        $data-> email = $email;
        $data-> cpf = $cpf;
        $data ->save();
        return redirect()->route('exibeInformacaoDenuncia')
        ->with('SucessoCad','Sua denuncia foi salva com sucesso!');
    }

    public function edita($id){
        $data = Denuncia::find($id);
        if($data){
            return view('AdminDenunciaView.editaDenuncia',['data'=>$data]);
        }else{
            return redirect()->route('listaDenuncia');
        }
    }
    public function editaAction(Request $request, $id){
        $request->validate([
            'status'=>['required','string'],
        ]);
        $status = $request->input('status');

        try{
            Denuncia::find($id)
            ->update(['status'=>$status]);
            return redirect()->route('listaDenuncia')
            ->With('SucessoEdita','Status alterado com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('listaDenuncia')
            ->with('ErroEdita', 'Erro! apos o recebimento é necessario alterar o status da denuncia');
        }
    }

    
}
