<html>
    <head>
        <meta charset="utf-8">
        <title>dados da denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloInformacoes.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloHeader.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloFooter.css')}}">
    </head>
    <body>
        <header>
            <div class="container-fluid  cabecalho">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><strong>SEMAM</strong></h1>
                            <h3>Secretaria Municipal do Ambiente</h3>
                            <h4>Departamento de Fiscalização Ambiental</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header><br/>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        @if($errors->any())
                            <div class="row">
                                <div class="col-sm-12">  
                                    <div class="alert alert-warning">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li style="font-size: 17px">
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
            </div>
        </section>
        <article>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>DADOS DO DENUNCIANTE</strong></h3></div>
                            <div class="panel-body">
                                <p><b>DENUNCIANTE:</b><br> {{$data->denunciante}}.</p>
                                <p><b>TELEFONE: </b><br>{{$data->telefone}}.</p>
                                <p><b>E-MAIL:</b><br> {{$data->email}}.</p>
                                <p><b>CPF:</b><br> {{$data->cpf}}.</p>   
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>DADOS DA DENUNCIA</strong></h3></div>
                            <div class="panel-body">
                                <p><b>TIPO DE CRIME:</b><br> {{$data->crime}}.</p>
                                <p><b>DESCRIÇÃO DO CRIME:</b><br>  {{$data->descricao}}.</p>
                                <p><b>NOME DO INFRATOR:</b><br>  {{$data->infrator}}.</p>
                                <p><b>Nº DA DENUNCIA:</b><br>  {{$data->id}}.</p>
                                <p><b>BAIRRO:</b><br> {{$data->bairro}}.</p>
                                <p><b>RUA:</b><br> {{$data->rua}}.</p>
                                <p><b>DATA E HORA:</b><br> {{\Carbon\Carbon::parse($data->data)->format('d/m/Y \a\s H:i:s')}}.</p>
                                <p><b>ANEXOS</b></p>
                                @if ($data->anexoUm or $data->anexoDois or $data->anexoTres)
                                    <img src="{{url("storage/{$data->anexoUm}")}}" alt="{{$data->name}}">
                                    <img src="{{url("storage/{$data->anexoDois}")}}" alt="{{$data->name}}">
                                    <img src="{{url("storage/{$data->anexoTres}")}}" alt="{{$data->name}}">
                                @endif 
                            </div>
                            <a href="{{route('pdf')}}" class="btn btn-sm btn-default"><strong>IMPRIMIR COMPROVANTE</strong><span class="glyphicon glyphicon-print"></span></a><br/><br/>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>STATUS DA DENUNCIA</strong></h3></div>
                            <div class="panel-body">
                                <p><b>STATUS:</b><br> {{$data->status}}.</p> 
                                <p><b>DESCRICÃO:</b><br> {{$data->descricaoDoArquivamento}}.</p> 
                                <form method="POST">
                                    @csrf  
                                    <label><p><b>ALTERAR STATUS</b></p></label>
                                    <select name="status" value="{{$data->status}}" class="form-control" autofocus>
                                        <option value=""></option>
                                        <option value="Atentida">Atentida</option>
                                        <option value="Arquivada">Arquivada</option>
                                        <option value="Em Analise">Em Analise</option>  
                                    </select><br>
                                    <label><p><b>DESCRICÃO</b></p></label><br>
                                    <textarea name="descricaoDoArquivamento" value="{{$data->descricaoDoArquivamento}}" rows="2" class="form-control" placeholder="descreva porque selecionou o status acima"></textarea><br><br>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary"><strong>RETORNAR</strong></button>                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @extends('layouts.templateFooter')
        <script type="text/javascript" src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>

