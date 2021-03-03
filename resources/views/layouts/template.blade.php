<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <link rel="stylesheet" href="{{asset('assets/css/estiloCadDenunciante.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/estiloCadDenuncia.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/estiloHome.css')}}">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center cabecalho">
                    <img src="{{asset('assets/img/brazao1.png')}}">
                    <h3><strong>PREFEITURA MUNICIPAL DE SÃO JOSÉ DE RIBAMAR</strong></h3>
                    <h4><strong>SECRETARIA MUNICIPAL DO AMBIENTE - SEMAM</strong></h4><hr>
                </div>
            </div>
        </div>
    </header>
    <article>
        @yield('content')
    </article>
   <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    Todos os direito reservados || Secretaria Municipal do Ambiente - SEMAM</a><br><br>
                </div>
            </div>
        </div>
   </footer>
    <script src="{{asset('assets/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mask.min.js')}}"></script>
    <script src="{{asset('assets/js/somenteLetras.js')}}"></script>
    <script src="{{asset('assets/js/mascaraCpf.js')}}"></script>
    <script src="{{asset('assets/js/validaCpf.js')}}"></script>
    <script src="{{asset('assets/js/validaTelefone.js')}}"></script>
</body>
</html>