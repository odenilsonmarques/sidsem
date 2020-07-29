<html>
    <head>
        <meta charset="utf-8">
        <title>dados da denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloInformacoes.css')}}">
    </head>

    <body>

        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success text-center">
                            <h1>SEMAM</h1>
                            <h3>Secretaria Municipal do Ambiente</h3>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success">
                            <div class="panel-heading"><h3>Confira os dados da denuncia</h3></div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p style="font-size:22px">TIPO DE CRIME: {{$data->crime}}.</p><hr>
                                        <p style="font-size:22px">DESCRIÇÃO DO CRIME: {{$data->descricao}}.</p><hr>
                                        <p style="font-size:22px">NOME DO INFRATOR: {{$data->infrator}}.</p><hr>
                                        <p style="font-size:22px">BAIRRO: {{$data->bairro}}.</p><hr>
                                        <p style="font-size:22px">RUA: {{$data->rua}}.</p><hr>
                                        <p style="font-size:22px">DATA E HORA: {{\Carbon\Carbon::parse($data->data)->format('d/m/Y \a\s H:i:s')}}.</p><hr>
                                        <p style="font-size:22px">Nº DA DENUNCIA : {{$data->id}}.</p><hr>
                                        <p style="font-size:22px">ANEXOS</p>
                                        @if ($data->anexoUm or $data->anexoDois or $data->anexoTres)
                                            <img src="{{url("storage/{$data->anexoUm}")}}" alt="{{$data->name}}" style="width:170px;height:120px">
                                            <img src="{{url("storage/{$data->anexoDois}")}}" alt="{{$data->name}}" style="width:170px;height:120px">
                                            <img src="{{url("storage/{$data->anexoTres}")}}" alt="{{$data->name}}" style="width:170px;height:120px">
                                        @endif    
                                    </div>
                                </div>  
                            </div>

                            <div class="panel-heading"><h3>Confira seus dados</h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p style="font-size:22px">DENUNCIANTE: {{$data->denunciante}}.</p><hr>
                                            <p style="font-size:22px">TELEFONE: {{$data->telefone}}.</p><hr>
                                            <p style="font-size:22px">E-MAIL: {{$data->email}}.</p><hr>
                                            <p style="font-size:22px">CPF: {{$data->cpf}}.</p>        
                                        </div>
                                    </div>      
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST">
                                        @csrf
                                        <p style="font-size:22px">STATUS</p>
                                        <select name="status" value="{{$data->status}}" class="form-control">
                                            <option value=""></option>
                                            <option value="Em Analise">Em Analise</option>
                                            <option value="Concluída">Concluída</option>
                                        </select><br>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary"><strong>Salvar Alteração</strong></button>
                                        </div>
                                    </form>
                                </div>   
                            </div>  
                        </div>
                    </div>    
                </div>
            </div>
        </article>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 rodape">
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

