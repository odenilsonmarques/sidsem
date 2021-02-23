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
                <h3 class="alert alert-success">Denuncia Enviada com sucesso</h3>
                <div class="row">
                   {{$data->infrator}}
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
        <script type="text/javascript" src="{{('/assets/js/exitEnter.js')}}"></script>
    </body>
</html>

