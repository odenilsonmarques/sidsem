<html>
    <head>
        <meta charset="utf-8">
        <title>dados da denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloHeader.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloFooter.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloTable.css')}}">
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
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                                    <b>Olá - {{ Auth::user()->name }} <span class="caret"></span></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('sair') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><br>
                </div>
            </div>
        </header><br/>
        <article>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">     
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>CRIME</th>
                                    <th>INFRATOR</th>
                                    <th>BAIRRO</th>
                                    <th>RUA</th>
                                    <th>Data</th>
                                    <th>Detalhes</th>
                                    <th>status</th>
                                </tr>
                                @foreach ($lista as $itens)
                                <tr>
                                    <td>{{$itens ->crime}}</td>
                                    <td>{{$itens ->infrator}}</td>
                                    <td>{{$itens ->bairro}}</td>
                                    <td>{{$itens ->rua}}</td>
                                    <td>{{Carbon\Carbon::parse($itens ->data)->format('d/m/Y \a\s H:i:s')}}</td>
                                    <td><a href="{{route('editaDenuncia',['id'=>$itens->id])}}" class="btn btn-sm btn-info">Abrir<span class="glyphicon glyphicon-bullhorn"></span></a></td>
                                    <td>{{$itens->status}}</td>
                                </tr>
                                @endforeach
                            </table>  
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

