
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
                    @foreach ($data as $item)
                    CRIME: {{$item->crime}}.<br><br>
                    @endforeach
                    
                    
                   
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

