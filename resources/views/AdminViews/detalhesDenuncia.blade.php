@extends('layouts.template')
@section('title','detalhes da denuncia')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><strong>DADOS DO DENUNCIANTE</strong></h3></div>
                    <div class="panel-body">
                        <p><b>DENUNCIANTE:</b><br>{{$data->nome}}.</p>
                        <p><b>CPF:</b><br>{{$data->cpf}}.</p>  
                        <p><b>TELEFONE:</b><br>{{$data->telefone}}.</p>
                        <p><b>E-MAIL:</b><br>{{$data->email}}.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><strong>DADOS DA DENÚNCIA</strong></h3></div>
                    <div class="panel-body">
                        <p><b>TIPO DE CRIME:</b><br> {{$data->crime}}.</p>
                        <p><b>DESCRIÇÃO DO CRIME:</b><br>  {{$data->descricao}}.</p>
                        <p><b>NOME DO INFRATOR:</b><br>  {{$data->infrator}}.</p>
                        <p><b>Nº DA DENÚNCIA:</b><br>  {{$data->id}}.</p>
                        <p><b>BAIRRO:</b><br> {{$data->bairro}}.</p>
                        <p><b>RUA:</b><br> {{$data->rua}}.</p>
                        <p><b>DATA E HORA:</b><br> {{\Carbon\Carbon::parse($data->data)->format('d/m/Y \a\s H:i:s')}}.</p>
                        <p><b>ANEXOS</b></p>

                        <img src="{{url("storage/{$data->anexoUm}")}}" alt="{{$data->name}}">

                    </div>
                    <a href="#" class="btn btn-default" target="_blank"><strong>IMPRIMIR COMPROVANTE</strong><span class="glyphicon glyphicon-print"></span></a><br/><br/>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3><strong>STATUS DA DENÚNCIA</strong></h3></div>
                    <div class="panel-body">
                        <p><b>STATUS:</b><br> {{$data->status}}.</p> 
                        <p><b>DESCRICÃO:</b><br> {{$data->descricaoStatus}}.</p> 
                        <form method="POST">
                            @csrf  
                            <label><p><b>ALTERAR STATUS</b></p></label>
                            <select name="status" value="{{$data->status}}" class="form-control" autofocus>
                                <option value=""></option>
                                <option value="Atentida" @if (old('status') == "Atentida") {{'selected'}} @endif>Atentida</option>
                                <option value="Arquivada"  @if (old('status') == "Arquivada") {{'selected'}} @endif>Arquivada</option>
                                <option value="Em Analise" @if (old('status') == "Em Analise") {{'selected'}} @endif>Em Analise</option>  
                            </select><br>
                            <label><p><b>DESCRICÃO</b></p></label><br>
                            <textarea name="descricaoStatus" value="{{$data->descricaoStatus}}" rows="2" class="form-control" placeholder="Descreva porque selecionou o status acima"></textarea><br><br>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><strong>RETORNAR</strong></button>                                       
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
    
