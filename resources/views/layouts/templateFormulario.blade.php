<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('/assets/css/estiloFormAdicionaDenuncia.css')}}">
    </head>

    <body>
        <header>
            <div class="panel panel-default" style="background-color:#006400;text-align:center">
                <h1 style="color: #fff">SEMAM</h1>
                <h3 style="color: #fff">Secretaria Municipal do Ambiente</h3>
              </div>
        </header>
        
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
                                <div class="panel-heading"><h3>Dados da Denuncia</h3></div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="crime">Tipo de crime</label>
                                                <select name="crime" id="crime" class="form-control" value="{{old('crime')}}" autofocus="">
                                                    <option></option>
                                                    <option value="atividade sem licenciamento">Atividade sem licenciamento</option>
                                                    <option value="crime contra a flora">Crime contra a flora</option>
                                                    <option value="crime contra a fauna">crime contra a fauna</option>
                                                    <option value="poluicao">poluicao</option>
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
                                                <label for="infrator">Infrator(a)</label>
                                                <input type="text" name="infrator" id="infrator" value="{{old('infrator')}}" class="form-control" placeholder="Informe o nome do infrator">
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
                                <div class="panel-heading"><h3>Dados do Denunciante (seus dados serão mantidos sobre sigílo)</h3></div>
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
                                                <label for="telefone">Telefone</label>
                                                <input type="text" name="telefone" id="telefone"  value="{{old('telefone')}}"class="form-control" placeholder="9999-9999 ou 9999-99999" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);">
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
                                                <input type="text" name="cpf" id="cpf"  value="{{old('cpf')}}" class="form-control" placeholder="Informe o seu cpf" onblur="validaFormato(this);">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div> 
                            <div class="panel panel-default">   
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
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

        <footer class="container-fluid text-center" style="margin-top:5%;background-color:#FFFAF0"><br><br>
            &copy 2020 controle de vendas || by <a href="#">start.com</a><br><br>
        </footer>

        <script type="text/javascript" src="{{('/assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/validaTelefone.js')}}"></script>
        <script type="text/javascript" src="{{('/assets/js/validaCpf.js')}}"></script>
    </body>
</html>
