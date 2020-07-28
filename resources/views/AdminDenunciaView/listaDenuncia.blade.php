<html>
    <head>
        <meta charset="utf-8">
        <title>dados da denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloTable.css')}}">
    </head>

    <body>
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center cabecalho">
                        <h1>SEMAM</h1>
                        <h3>Secretaria Municipal do Ambiente</h3><br/>
                    </div>
                </div><br/>
            
                <div class="row">
                    <div class="col-sm-12"> 
                        @if(session('SucessoEdita'))
                            <div class="alert alert-success text-center" style="font-size: 20px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                <p>{{session('SucessoEdita')}}</p>     
                            </div>   
                        @endif
                        @if(session('ErroEdita'))
                            <div class="alert alert-success text-center" style="font-size: 20px;">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                <p>{{session('ErroEdita')}}</p>     
                            </div>   
                        @endif
                    </div>
                </div>
            </div>
        </header>
        
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
                                    <td><a href="{{route('editaDenuncia',['id'=>$itens->id])}}" class="btn btn-sm btn-info">Abrir<span class="glyphicon glyphicon-bullhorn" style="margin-left: 10px;"></span></a></td>
                                    <td>{{$itens->status}}</td>
                                </tr>
                                @endforeach
                            </table>  
                        </div>
                    </div>    
                </div>
            </div>
        </article>
        
        <script type="text/javascript" src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>

