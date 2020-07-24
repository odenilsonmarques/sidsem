<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{('assets/css/estiloHeader.css')}}">
    </head>

    <body>
        <header style="background-color:#FFF">
            <nav class="navbar navbar-default">
                <div class="container-fluid" style="background-color:#B0C4DE">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand"><img src="{{('assets/img/logo.png')}}" height="65px"  radio="4opx"></a>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavBar">
                                    <ul class="nav navbar-nav navbar-right">                   
                                        <li><a href="#">Área Restrita <span class="glyphicon glyphicon-user logo-small" style="color:#8B0000;font-size:30px"></span></a></li>
                                        <li><a href="#">Contatos <span class="glyphicon glyphicon-phone logo-small" style="color:#8B0000;font-size:30px"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="jumbotron text-center" style="background-color:#3CB371">
                <h1 style="color: #fff">SEMAM</h1>
                <p style="color: #fff">Secretaria Municipal do Ambiente</p>
            </div>
        </header>

        <article>
            <div class="container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 text-center">
                                <span class="glyphicon glyphicon-user " style="color:#3CB371;font-size:40px"></span>
                                <h4>Área Restrita</h4>
                                <p>alguma coisa aqui deve ter</p>
                            </div>
        
                            <div class="col-lg-3 text-center">
                                <span class="glyphicon glyphicon-bullhorn " style="color:#3CB371;font-size:40px"></span>
                                <h4>Denuncie</h4>
                                <p>alguma coisa aqui deve ter</p>
                            </div>
        
                            <div class="col-lg-3 text-center">
                                <span class="" style="color:#3CB371;font-size:50px"></span>
                                <h4>Contatos</h4>
                                <p>alguma coisa aqui deve ter</p>
                            </div> 

                            <div class="col-lg-3 text-center">
                                <span class="" style="color:#3CB371;font-size:50px"></span>
                                <h4>Contatos</h4>
                                <p>alguma coisa aqui deve ter</p>
                            </div> 
                        </div>
                    </div>    
                </div>
            </div>
        </article>
        
        <footer class="container-fluid text-center" style="margin-top:5%;background-color:#FFFAF0"><br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                            &copy 2020 controle de vendas || by <a href="#">start.com</a><br><br>
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="{{('assets/js/jquery-3.1.1.min.js')}}"></script>
        <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    </body>
</html>
