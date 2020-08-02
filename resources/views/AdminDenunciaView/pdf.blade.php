
   <html>
    <head>
        <meta charset="utf-8">
        <title>dados da denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloPdf.css')}}">
    </head>

    <body>
        <header>
            <div class="container-fluid">
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-12 header" >
                            <p><strong>SEMAM</strong><br>
                                Secretaria Municipal do Ambiente<br>
                            Departamento de Fiscalização Ambiental</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 ">
                        <h2>Confira os dados da denuncia</h2>
                            <div class="row">
                                <div class="col-lg-12 body">
                                    <p><b>TIPO DE CRIME: </b><span>{{$dados->crime}}.</span></p> 
                                    <p><b>DESCRIÇÃO DO CRIME: </b> <span>{{$dados->descricao}}.</span></p>
                                    <p><b>NOME DO INFRATOR: </b> <span>{{$dados->infrator}}.</span></p>
                                    <p><b>BAIRRO: </b> <span>{{$dados->bairro}}.</span></p>
                                    <p><b>RUA: </b> <span>{{$dados->rua}}.</span></p>
                                    <p><b>REGISTRADA EM: </b><span>{{\Carbon\Carbon::parse($dados->data)->format('d/m/Y \a\s H:i:s')}}.</span></p>
                                    <p><b>Nº DA DENUNCIA: </b> <span>{{$dados->id}}.</span></p>
                                    <p><b>STATUS: </b> <span>{{$dados->status}}.</span></p>
                                </div>
                            </div>
                        <h2>Confira seus dados</h2>
                            <div class="row">
                                <div class="col-lg-12 body">
                                    <p><b>DENUNCIANTE: </b><span>{{$dados->denunciante}}.</span></p>
                                    <p><b>TELEFONE: </b><span>{{$dados->telefone}}.</span></p>
                                    <p><b>E-MAIL: </b><span>{{$dados->email}}.</span></p>
                                    <p><b>CPF: </b><span>{{$dados->cpf}}.</span></p>  
                                </div>
                            </div>      
                    </div>
                </div>
            </div>
        </article><br>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 footer">
                        <p>                   
                            PREFEITURA DE SÃO JOSÉ DE RIBAMAR<br>
                            SECRETARIA MUNICIPAL DO AMBIENTE-SEMAM<br>
                            COORDENAÇÃO DE PROTEÇÃO AMBIENTAL - FISCALLIZAÇÃO E LICENCIAMENTO
                        </p> 
                    </div>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>

