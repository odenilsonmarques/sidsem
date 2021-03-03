<?php

namespace App\Http\Controllers\AdminDenunciaController;

use App\Http\Controllers\Controller;

use App\Denuncia;
use App\Teste;

use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function cadastrar(){
        return view('AdminViews.cadDenuncia');
    }
    public function cadastrarAction(Request $request){ 
        
        $request->validate([
            'nome'=>['required','string','min:5','max:30'],
            'telefone'=>['required','string','min:11'],
            'cpf'=>['required','string','min:11'],
            'crime'=>['required','string'],
            'descricao'=>['required','string','min:10','max:200'],
            'infrator'=>['required','string','min:5','max:30'],
            'bairro'=>['required','string','min:5','max:20'],
            'rua'=>['required','string','min:4','max:25'],
            'status'=>['required','string'],
            'descricaoStatus'=>['required','string'],
            'anexoUm'=>['nullable','image'],
            'anexoDois'=>['nullable','image'],
            
        ]);
        
        $nome = strtoupper($request->input('nome'));
        $telefone =  strtoupper($request->input('telefone'));
        $email =  strtoupper($request->input('email'));
        $cpf =  strtoupper($request->input('cpf'));
        $crime =  strtoupper($request->input('crime'));
        $descricao =  strtoupper($request->input('descricao'));
        $infrator =  strtoupper($request->input('infrator'));

        $municipio =  strtoupper($request->input('municipio'));
        $bairro =  strtoupper($request->input('bairro'));
        $rua =  strtoupper($request->input('rua'));
        $numero =  strtoupper($request->input('numero'));
        $pontoDeReferencia =  strtoupper($request->input('pontoDeRefencia'));

        $status =  strtoupper($request->input('status'));
        $descricaoStatus =  strtoupper($request->input('descricaoStatus'));
        
        //dd($request->file('anexo'));
        //dd($request->file('anexoUm'));
        //dd($request->file('anexoDois')->isValid());
        /*
        $anexo = $request->input('anexo');
        $anexoUm = $request->input('anexoUm');
        $anexoDois = $request->input('anexoDois');
        */
       
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
        
        $data = new Denuncia();
        $data -> nome = $nome;
        $data -> telefone = $telefone;
        $data -> email = $email;
        $data -> cpf = $cpf;
        $data -> crime = $crime;
        $data -> descricao = $descricao;
        $data -> infrator = $infrator;
        $data -> municipio = $municipio;
        $data -> numero = $numero;
        $data -> pontoDeReferencia = $pontoDeReferencia;

        $data -> bairro = $bairro;
        $data -> rua = $rua;
        $data -> status = $status;
        $data -> descricaoStatus = $descricaoStatus;
        $data -> anexoUm = $anexoUm;
        $data -> anexoDois = $anexoDois;
        $data -> save();
        return redirect()->route('exibeInfomacaoExibe');
    }


    public function testar(){
        return view('AdminViews.cadTeste');
    }

    public function testarAction(Request $request){ 
        
        $request->validate([
            'nome'=>['required','string','min:5','max:30'],
            'anexo'=>['required','image'],
        ]);
        
        $nome = $request->input('nome');
        $anexo = $request->input('anexo');
        
        if($request->hasFile('anexo') && $request->anexo->isValid()){
            $anexo = $request->file('anexo')->store('imagens');
        }else if ($request->hasFile('anexo') == null){
            $anexo = '';
        }

        $dado = new Teste();
        $dado -> nome = $nome;
        $dado -> anexo = $anexo;
        //dd($request->file('anexo'));
        //dd($request->file('anexo')->isValid());
        
        $dado -> save();
        return redirect()->route('listaTesteLista');
    }
    public function lista()
    {
        $registros = Teste::all();
        return view('AdminViews.listaTeste',['registros'=>$registros]);

    }










    public function exibe()
    {
        return view('AdminViews.informacao');
    }

    public function listar(){
        $lista = Denuncia::all();
        return view('AdminViews.listaDenuncias',['lista'=>$lista]);
    }

    public function detalhar($id){
        $data = Denuncia::find($id);
        if($data){
            return view('AdminViews.detalhesDenuncia',['data'=>$data]);
        }else{
            return redirect()->route('listaDenuncia');
        }
    }

    /*
    public function editar($id){
        $data = Denuncia::find($id);
        if($data){
            return view('AdminViews.editaDenuncia',['data'=>$data]);
        }else{
            return redirect()->route('listaDenuncia');
        }
    }
    */














    /*
    public function editaAction(Request $request, $id){
        $request->validate([
            'status'=>['required','string'],
            'descricaoStatus'=>['required','string']
        ]);
        $status = $request->input('status');
        $descricaoStatus = $request->input('descricaoStatus');

        try{
            Denuncia::find($id)
            ->update(['status'=>$status,'descricaoStatus'=>$descricaoStatus]);
            return redirect()->route('listaDenuncia')
            ->With('SucessoEdita','Status alterado com sucesso!');
        }catch(\Exception $e){
            return redirect()->route('listaDenuncia')
            ->with('ErroEdita', 'Erro! apos o recebimento é necessario alterar o status da denuncia');
        }
    }*/
}
