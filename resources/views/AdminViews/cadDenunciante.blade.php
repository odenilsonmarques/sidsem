@extends('layouts.template')
@section('title','cadastro de denunciante')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}<br/>
                                </li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form method="POST" name="formDenuncia" id="formDenuncia"  enctype="multipart/form-data">
            @csrf
            <div class="panel panel-success">
                <div class="panel-heading"><h3><strong>Dados do Denunciante</strong></h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome"  value="{{old('nome')}}" class="form-control" placeholder="Informe seu nome"  onKeypress="return letras(event)">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="cpf">Cpf</label>
                                <input type="text" name="cpf" id="cpf"  value="{{old('cpf')}}" class="form-control" placeholder="Informe o seu cpf" onblur="validaFormato(this);" onkeypress="return (apenasNumeros(event))">
                                <div id="divResultado"></div>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="telefone">Celular</label>
                                <input type="text" name="telefone" id="telefone" data-mask="(00) 00000-0000" value="{{old('telefone')}}"class="form-control" placeholder="(99) 99999-9999">
                                <span id="resposta"></span>
                            </div>
                        </div>   
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email"  value="{{old('email')}}" class="form-control" placeholder="Informe um e-mail">
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
            
            <div class="panel panel-success">
                <div class="panel-heading"><h3><strong>Dados da Denuncia</strong></h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="crime">Tipo de crime</label>
                                <select name="crime" id="crime" class="form-control" autofocus="">{{old('crime')}}
                                    <option></option>
                                    <option value="Atividade sem licenciamento" @if (old('crime') == "Atividade sem licenciamento") {{'selected'}} @endif>Atividade sem licenciamento</option>
                                    <option value="Crime contra a flora" @if (old('crime') == "Crime contra a flora") {{'selected'}} @endif>Crime contra a flora</option>
                                    <option value="Crime contra a fauna" @if (old('crime') == "Crime contra a fauna") {{'selected'}} @endif>Crime contra a fauna</option>
                                    <option value="Poluicao" @if (old('crime') == "Poluicao") {{'selected'}} @endif>Poluicao</option>
                                </select>
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="descricao">Descricão</label>
                                <textarea name="descricao" id="descricao" rows="2" class="form-control" placeholder="Descreva aqui detalhes sobre a denuncia">{{old('descricao')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="infrator">Infrator(a) / Empresa</label>
                                <input type="text" name="infrator" id="infrator" value="{{old('infrator')}}" class="form-control" placeholder="Informe o nome do infrator(a) / empresa">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="bairro">Bairro</label>
                                <input type="text" name="bairro" id="bairro" value="{{old('bairro')}}" class="form-control" placeholder="Informe o bairro que está acontecendo o crime">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="rua">Rua</label>
                                <input type="text" name="rua" id="rua" value="{{old('rua')}}" class="form-control" placeholder="Informe a rua que está acontecendo o crime">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="status" id="status" value="Recebida" readonly="" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="descricaoStatus" id="descricaoStatus" value="Aguardado para ser analisada" readonly="" class="form-control">
                            </div>
                        </div>
                    </div>   
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="anexoUm">Anexar Arquivo Um</label>
                                <input type="file" name="anexoUm" id="anexoUm"  value="{{old('anexoUm')}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="anexoDois">Anexar Arquivo Dois</label>
                                <input type="file" name="anexoDois" id="anexoDois" value="{{old('anexoDois')}}" class="form-control">
                            </div>
                        </div>
                    </div>    
                </div>
            </div> 

            <div class="panel panel-default">   
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="{{('/')}}" class="btn btn-danger" role="button">CANCELAR<span class="glyphicon glyphicon-remove"></span></a>  
                            <button type="submit"  class="btn btn-success">ENVIAR<span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    </div>
                </div>  
            </div>    
        </form>
    </div>
@endsection