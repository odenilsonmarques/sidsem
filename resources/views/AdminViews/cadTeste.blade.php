

    <div class="container">
        <div class="row">
            <div class="col-lg-12">  
                @if($errors->any())
                    <div class="alert alert-warning">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li style="font-size: 17px">
                                    {{$error}}<br/>
                                </li>
                            @endforeach    
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <form method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-success">
                <div class="panel-heading"><h3><strong>CADASTRO TESTE</strong></h3></div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome"  value="{{old('nome')}}" class="form-control" placeholder="Informe seu nome"><br><br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="anexo">ANEXO</label>
                                <input type="file" name="anexo" id="anexo" value="{{old('anexo')}}" class="form-control"><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="panel panel-default">   
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-lg-12">
                            <a href="#" class="btn btn-danger" role="button">CANCELAR<span class="glyphicon glyphicon-remove" style="font-size: 15px;margin-left:5px;color:#fff"></span></a>  
                            <button type="submit"  class="btn btn-success">ENVIAR DENUNCIA<span class="glyphicon glyphicon-ok" style="font-size: 15px;margin-left:5px"></span></button>
                        </div>
                    </div>
                </div>  
            </div>    
        </form>
    </div>    

 