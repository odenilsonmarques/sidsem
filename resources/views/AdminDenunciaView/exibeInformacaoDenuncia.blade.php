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
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-sm-12">  
                                   @if(session('SucessoCad'))
                                      <div class="alert alert-success text-center">
                                         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                         <p>{{session('SucessoCad')}}</p>     
                                      </div>   
                                   @endif
                            </div>
                        </div>
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3><strong>Confira os dados da denúncia</strong></h3></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>TIPO DE CRIME: {{$dados->crime}}.</p><hr>
                                        <p>DESCRIÇÃO DO CRIME: {{$dados->descricao}}.</p><hr>
                                        <p>NOME DO INFRATOR: {{$dados->infrator}}.</p><hr>
                                        <p>BAIRRO: {{$dados->bairro}}.</p><hr>
                                        <p>RUA: {{$dados->rua}}.</p><hr>
                                        <p>REGISTRADA EM: {{\Carbon\Carbon::parse($dados->data)->format('d/m/Y \a\s H:i:s')}}.</p><hr>
                                        <p>Nº DA DENÚNCIA: {{$dados->id}}.</p><hr>
                                        <p>ANEXOS</p>
                                        @if ($dados->anexoUm or $dados->anexoDois or $dados->anexoTres)
                                            <img src="{{url("storage/{$dados->anexoUm}")}}" alt="{{$dados->name}}">
                                            <img src="{{url("storage/{$dados->anexoDois}")}}" alt="{{$dados->name}}">
                                            <img src="{{url("storage/{$dados->anexoTres}")}}" alt="{{$dados->name}}">
                                        @endif     
                                    </div>
                                </div>      
                            </div>
                            <div class="panel-heading"><h3><strong>Confira seus dados</strong></h3></div>
                             <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>DENUNCIANTE: {{$dados->denunciante}}.</p><hr>
                                        <p>TELEFONE: {{$dados->telefone}}.</p><hr>
                                        <p>E-MAIL: {{$dados->email}}.</p><hr>
                                        <p>CPF: {{$dados->cpf}}.</p>   
                                    </div>
                                 </div>      
                             </div>
                        </div>
                        <div class="panel panel-default">   
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="{{route('adicionaDenuncia')}}" class="btn btn-sm btn-success"><strong>FAZER NOVA DENUNCIA</strong><span class="glyphicon glyphicon-plus"></a>
                                        <a href="{{route('pdf')}}" class="btn btn-sm btn-default"><strong>IMPRIMIR COMPROVANTE</strong><span class="glyphicon glyphicon-print"></span></a>
                                    </div>
                                </div>
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

