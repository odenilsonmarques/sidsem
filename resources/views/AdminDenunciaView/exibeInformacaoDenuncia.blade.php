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
                        </div>
                    </div>
                </div>
            </div>
        </header><br/>
        <article>

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>CONFIRA OS DADOS DA DENUNCIA</strong></h3></div>
                            <div class="panel-body">
                                <p><b>TIPO DE CRIME:</b><br/> {{$dados->crime}}.</p>
                                <p><b>DESCRIÇÃO DO CRIME:</b><br/> {{$dados->descricao}}.</p>
                                <p><b>NOME DO INFRATOR:</b><br/> {{$dados->infrator}}.</p>
                                <p><b>BAIRRO:</b><br/> {{$dados->bairro}}.</p>
                                <p><b>RUA:</b><br/> {{$dados->rua}}.</p>
                                <p><b>REGISTRADA EM:</b><br/> {{\Carbon\Carbon::parse($dados->data)->format('d/m/Y \a\s H:i:s')}}.</p>
                                <p><b>Nº DA DENÚNCIA:</b><br/> {{$dados->id}}.</p>
                                <p><b>ANEXOS</b></p>
                                @if ($dados->anexoUm or $dados->anexoDois or $dados->anexoTres)
                                    <img src="{{url("storage/{$dados->anexoUm}")}}" alt="{{$dados->name}}">
                                    <img src="{{url("storage/{$dados->anexoDois}")}}" alt="{{$dados->name}}">
                                    <img src="{{url("storage/{$dados->anexoTres}")}}" alt="{{$dados->name}}">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>CONFIRA SEUS DADOS</strong></h3></div>
                            <div class="panel-body">
                                <p><b>DENUNCIANTE:</b><br/> {{$dados->denunciante}}.</p>
                                <p><b>TELEFONE:</b><br/> {{$dados->telefone}}.</p>
                                <p><b>E-MAIL:</b><br/> {{$dados->email}}.</p>
                                <p><b>CPF: </b><br/> {{$dados->cpf}}.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">   
                            <div class="panel-footer">
                                <a href="{{route('adicionaDenuncia')}}" class="btn btn-sm btn-success"><strong>FAZER NOVA DENUNCIA</strong><span class="glyphicon glyphicon-plus"></a>
                                <a href="{{route('pdf')}}" class="btn btn-sm btn-default"><strong>IMPRIMIR COMPROVANTE</strong><span class="glyphicon glyphicon-print"></span></a>    
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

