<html>
    <head>
        <meta charset="utf-8">
        <title>index</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloIndex.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloFooter.css')}}">
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row"><br/>
                    <div class="col-lg-12 text-center">
                        <img src="{{('assets/img/brazao1.png')}}">
                        <h1><strong>PREFEITURA MUNICIPAL DE SÃO JOSÉ DE RIBAMAR</strong></h1>
                        <h2><strong>SECRETARIA MUNICIPAL DO AMBIENTE - SEMAM</strong></h2><hr>
                    </div>
                </div>
            </div>
        </header><br/><br/>
        <article>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 text-center">
                                <a href="{{route('login')}}">
                                    <span class="glyphicon glyphicon-user"></span>
                                    <h4><strong>Área Restrita</strong></h4>
                                    <p>Somente pessoas autorizadas</p>
                                </a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <a href="{{route('adicionaDenuncia')}}">
                                    <span class="glyphicon glyphicon-bullhorn"></span>
                                    <h4><strong>Denuncie</strong></h4>
                                    <p>Faça uma denuncia clicando aqui</p>
                                </a>
                            </div>
                            <div class="col-lg-4 text-center">
                                <span class="glyphicon glyphicon-phone"></span>
                                <h4><strong>Contatos</strong></h4>
                                <p>(98) 3224 - 0107</p>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </article><br/><br/>
        @extends('layouts.templateFooter')
        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
