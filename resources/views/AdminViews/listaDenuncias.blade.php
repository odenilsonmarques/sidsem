@extends('layouts.template')
@section('title','denuncias')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @foreach ($lista as $itens)
                    
                            <div class="panel panel-success">
                                <div class="panel-heading"><h4><strong>DENÚNCIA  Nº <b class="info">{{$itens->id}}</b> -- <b>DATA E HORA:<b class="info">{{Carbon\Carbon::parse($itens ->data)->format('d/m/Y \À\S H:i:s')}}</b><br/></strong></h4></div>
                                <div class="panel-body">    
                                    <h4 style="color:#4682B4"><b>DADOS DO DENUNCIANTE</b></h4>
                                    
                                    <b  style="color:#4682B4">DENUNCIANTE: </b>{{$itens->nome}}</b><br/>
                                    <b  style="color:#4682B4">CPF: </b><b class="info">{{$itens->cpf}}</b> |
                                    <b  style="color:#4682B4">TELEFONE: </b><b class="info">{{$itens->telefone}}</b> |
                                    <b  style="color:#4682B4">E-MAIL: </b><b class="info">{{$itens->email}}</b><hr>
                                    

                                    <h4 style="color:#4682B4"><b>DADOS DO INFRATOR</b></h4>
                                    <b  style="color:#4682B4">INFRATOR: </b><b class="info">{{$itens->infrator}}</b><br/>
                                    <b style="color:#4682B4">TIPO CRIME: </b><b class="info">{{$itens->crime}}</b><br/>
                                    <b  style="color:#4682B4">DESCRIÇÃO: </b><b class="info">{{$itens->descricao}}<br/><hr>

                                    <h4 style="color:#4682B4"><b>LOCAL DO CRIME AMBIENTAL</b></h4>
                                    <b  style="color:#4682B4">MUNICIPIO: </b><b class="info">{{$itens->municipio}}</b><br/>
                                    <b  style="color:#4682B4">BAIRRO: </b><b class="info">{{$itens->bairro}}</b><br/>
                                    <b  style="color:#4682B4">RUA: </b><b class="info">{{$itens->rua}}</b><br>
                                    <b  style="color:#4682B4">Nº: </b><b class="info">{{$itens->numero}}</b><br>
                                    <b  style="color:#4682B4">PONTO DE REFERÊNCIA: </b><b class="info">{{$itens->pontoDeReferencia}}</b><br>
                                    <hr>

                                    
                                    <h4 style="color:#4682B4"><b>ANEXOS</b></h4>
                                    <img src="{{url("storage/{$itens->anexoUm}")}}">
                                    <img src="{{url("storage/{$itens->anexoDois}")}}"><hr>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
    
