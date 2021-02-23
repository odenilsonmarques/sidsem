@extends('layouts.template')
@section('title','Denuncie')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">
                <a href="{{route('register')}}">
                    <span class="glyphicon glyphicon-user"></span>
                    <h4><strong>NÃO TENHO CADASTRO</strong></h4>
                    <p>DENUNCIAR PELA 1ª VEZ</p>
                </a>
            </div>
            <div class="col-lg-6 text-center">
                <a href="{{route('denunciaRealizar')}}">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    <h4><strong>JÁ TENHO CADASTRO</strong></h4>
                    <p>FAZER NOVA DENUNCIA</p>
                </a>
            </div>
        </div>
    </div>
@endsection
