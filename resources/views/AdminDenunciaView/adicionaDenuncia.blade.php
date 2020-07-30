<html>
    <head>
        <meta charset="utf-8">
        <title>adiciona denuncia</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloFormAdicionaDenuncia.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloFooter.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloHeader.css')}}">
    </head>

    <body>
        <header>
            <div class="container-fluid  cabecalho">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1><strong>SEMAM</strong></h1>
                            <h3>Secretaria Municipal do Ambiente</h3>
                            <div class="alert alert-info  alert-dismissible">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">Fechar &times;</a>
                                <h4><b>Bem - vindo ao cadastro de denuncia!</b><h4>
                                    <h5>Faça sua denúncia. Mas antes leia os itens abaixo. O serviço é gratuito, seguro e sigiloso.</h5>
                                <ul>
                                    <li>Informe dados confiáveis</li>
                                   <li>É importante que a sua denúncia esteja acompanhada de materiais que evidenciem o crime ambiental, tais como, fotos.</li>
                                   <li> Denúncias sem identificação do local não poderão ser atendidas</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><br/>
        
        <article>
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
                        <form method="POST"  name="formDenuncia" id="formDenuncia" enctype="multipart/form-data">
                            @csrf
                            <div class="panel panel-success">
                                <div class="panel-heading"><h3><strong>Dados da Denuncia</strong></h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="crime">Tipo de crime</label>
                                                <select name="crime" id="crime" class="form-control" value="{{old('crime')}}" autofocus="">
                                                    <option></option>
                                                    <option value="Atividade sem licenciamento">Atividade sem licenciamento</option>
                                                    <option value="Crime contra a flora">Crime contra a flora</option>
                                                    <option value="Crime contra a fauna">Crime contra a fauna</option>
                                                    <option value="Poluicao">Poluicao</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="descricao">Descricão</label>
                                                <textarea name="descricao" id="descricao" rows="2" value="{{old('descricao')}}" class="form-control" placeholder="Descreva aqui detalhes sobre a denuncia"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="infrator">Infrator(a) / Empresa</label>
                                                <input type="text" name="infrator" id="infrator" value="{{old('infrator')}}" class="form-control" placeholder="Informe o nome do infrator(a) / empresa">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="bairro">Bairro</label>
                                                <input type="text" name="bairro" id="bairro" value="{{old('bairro')}}" class="form-control" placeholder="Informe o bairro que está acontecendo o crime">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="rua">Rua</label>
                                                <input type="text" name="rua" id="rua" value="{{old('rua')}}" class="form-control" placeholder="Informe a rua que está acontecendo o crime">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input type="text" name="status" id="status" value="Recebida" readonly="" class="form-control">
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="anexoUm">Anexar Arquivo Um</label>
                                                <input type="file" name="anexoUm" id="anexoUm" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="anexoDois">Anexar Arquivo Dois</label>
                                                <input type="file" name="anexoDois" id="anexoDois" class="form-control" >
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="anexoTres">Anexar Arquivo Tres</label>
                                                <input type="file" name="anexoTres" id="anexoTres" class="form-control" >
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <div class="panel panel-success">
                                <div class="panel-heading"><h3><strong>Dados do Denunciante (sua identidade será mantida em sigilo)</strong></h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="denunciante">Nome</label>
                                                <input type="text" name="denunciante" id="denunciante"  value="{{old('denunciante')}}" class="form-control" placeholder="Informe seu nome">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="telefone">Celular</label>
                                                <input type="text" name="telefone" id="telefone" data-mask="(00) 00000-0000" value="{{old('telefone')}}"class="form-control" placeholder="(99) 99999-9999">
                                                <span id="resposta"></span>
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="email"  value="{{old('email')}}" class="form-control" placeholder="denuncia@gmail.com">
                                            </div>
                                        </div>
                                    </div>    
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="cpf">Cpf</label>
                                                <input type="text" name="cpf" id="cpf"  value="{{old('cpf')}}" class="form-control" placeholder="Informe o seu cpf" onblur="validaFormato(this);" onkeypress="return (apenasNumeros(event))">
                                                <div id="divResultado"></div>  
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div> 
                            <div class="panel panel-default">   
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a href="{{route('/')}}" class="btn btn-danger" role="button">CANCELAR<span class="glyphicon glyphicon-remove" style="font-size: 15px;margin-left:5px;color:#fff"></span></a>  
                                            <button type="submit" class="btn btn-success">ENVIAR DENUNCIA<span class="glyphicon glyphicon-ok" style="font-size: 15px;margin-left:5px"></span></button>
                                        </div>
                                    </div>
                                </div>  
                            </div>    
                        </form>
                    </div>     
                </div>
            </div>
        </article>
        @extends('layouts.templateFooter')
        <script type="text/javascript" src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/jquery.mask.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/validaCpf.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/mascarCpf.js')}}"></script>
    </body>
</html>
