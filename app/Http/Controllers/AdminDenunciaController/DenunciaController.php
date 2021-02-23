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
            'descricao'=>['required','string','min:10','max:200'],
            'infrator'=>['required','string','min:5','max:30'],
            'bairro'=>['required','string','min:5','max:20'],
            'rua'=>['required','string','min:4','max:25'],
            'status'=>['required','string'],
            'descricaoStatus'=>['required','string'],
        ]);
        $crime = $request->input('crime');
        $descricao = $request->input('descricao');
        $infrator = $request->input('infrator');
        $bairro = $request->input('bairro');
        $rua = $request->input('rua');
        $status = $request->input('status');
        $descricaoStatus = $request->input('descricaoStatus');
        $denunciante_id = $request->input('denunciante_id');

      
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
        $data-> descricaoStatus = $descricaoStatus;
        $data -> anexoUm = $anexoUm;
        $data -> anexoDois = $anexoDois;
        $data -> anexoTres = $anexoTres;
        $data -> denunciante_id = $denunciante_id;
        $data-> save();
        
        /* 
            1º opcao
            - nesse caso, o id não é exibido na url
            - os dados nao sao exibido na view
            - o pdf ta sempre imprimindo o ultimo registro
            - nao permite a dupliacao de registro na base
            - a opcao abaixo passa o id na url
            return redirect()->route('exibeInformacaoDenuncia',['dados'=>$data]);
        */
       // return redirect()->route('exibeInformacaoDenuncia',['data'=>$data]);
        //return redirect()->route('exibeInformacaoDenuncia',[$data->id + env('MASK_ID')]);
        return redirect()->route('exibeInformacaoDenuncia');

        /* 
            2º opcao (DESCARTADA), pois qd a pagina é atualizada outro dado ds inserido é caregado
            - nesse caso, o id não é exibido o id na url
            - os dados nao sao exibido na view
            - o pdf ta sempre imprimindo o ultimo registro
            - return redirect()->route('pdf'); 
        */
       
       

       //return view('AdminDenunciaView.exibeInformacaoDenuncia',['data'=>$data]);

       //return view('AdminDenunciaView.pdf',['data'=>$data]);

       //return redirect()->route('pdf',['data'=>$data]);

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
    }
}
