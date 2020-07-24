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
            <div class="panel panel-success text-center">
                <h1>SEMAM</h1>
                <h3>Secretaria Municipal do Ambiente</h3>
            </div>
        </header>
        
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="row">
                                <div class="col-sm-12">  
                                       @if(session('SucessoCad'))
                                          <div class="alert alert-success text-center" style="font-size: 20px;">
                                             <a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a>
                                             <p>{{session('SucessoCad')}}</p>     
                                          </div>   
                                       @endif
                                    
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading"><h3>Confira os dados da denuncia</h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                          
                                                <p style="font-size:22px">TIPO DE CRIME: {{$dados->crime}}.</p><hr>
                                                <p style="font-size:22px">DESCRIÇÃO DO CRIME: {{$dados->descricao}}.</p><hr>
                                                <p style="font-size:22px">NOME DO INFRATOR: {{$dados->infrator}}.</p><hr>
                                                <p style="font-size:22px">BAIRRO: {{$dados->bairro}}.</p><hr>
                                                <p style="font-size:22px">RUA: {{$dados->rua}}.</p><hr>
                                                <p style="font-size:22px">DATA E HORA: {{\Carbon\Carbon::parse($dados->data)->format('d/m/Y \a\s H:i:s')}}.</p>
                                                
                                                
                                         
                                          
                                        </div>
                                    </div>      
                                </div>

                                <div class="panel-heading"><h3>Confira seus dados</h3></div>
                                 <div class="panel-body">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             
                                                   <p style="font-size:22px">DENUNCIANTE: {{$dados->denunciante}}.</p><hr>
                                                   <p style="font-size:22px">TELEFONE: {{$dados->telefone}}.</p><hr>
                                                   <p style="font-size:22px">E-MAIL: {{$dados->email}}.</p><hr>
                                                   <p style="font-size:22px">CPF: {{$dados->cpf}}.</p>
                                          
                                             
                                          </div>
                                       </div>      
                                 </div>
                            </div>
                            
                            <div class="panel panel-default">   
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="{{route('pdf')}}" class="btn btn-sm btn-info">IMPRIMR</a>
                                            <button type="submit" class="btn btn-success">ENVIAR DENUNCIA<span class="glyphicon glyphicon-ok" style="font-size: 15px;margin-left:5px"></span></button>
                                        </div>
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

