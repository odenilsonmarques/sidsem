@extends('layouts.template')
@section('title', 'Home')
    
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-3 text-center">
                <a href="{{route('login')}}">
                    <span class="glyphicon glyphicon-user"></span>
                    <h4><strong>ÁREA RESTRITA</strong></h4>
                    <p>Somente pessoas autorizadas</p>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="{{route('denunciaRealizar')}}">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    <h4><strong>DENUNCIAR</strong></h4>
                    <p>Faça uma denúncia clicando aqui</p>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <a href="#">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    <h4><strong>ACOMPANHAR DENUNCIA</strong></h4>
                    <p>Faça uma denúncia clicando aqui</p>
                </a>
            </div>
            <div class="col-lg-3 text-center">
                <span class="glyphicon glyphicon-phone"></span>
                <h4><strong>CONTATO</strong></h4>
                <p>(98) 3224 - 0107</p>
            </div>
        </div>
    </div>
@endsection