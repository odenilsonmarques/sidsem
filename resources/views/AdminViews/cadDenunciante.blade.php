@extends('layouts.template')
@section('title','cadastro de denunciante')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($errors->any())
                    <div class="row">
                        <div class="col-sm-12">  
                            <div class="alert alert-warning">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>
                                            {{$error}}<br/>
                                        </li>
                                    @endforeach    
                                </ul>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <form method="POST" name="formDenunciante" id="formDenunciante">
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