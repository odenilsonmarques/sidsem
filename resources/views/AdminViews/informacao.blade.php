@extends('layouts.template')
@section('title','status')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>DENÚNCIA ENVIADA COM SUCESSO !</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 text-center">
                <a href="{{route('cadDenunciaCadastrar')}}">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    <h4><strong>FAZER NOVA DENÚNCIA</strong></h4>
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
                <a href="#">
                    <span class="glyphicon glyphicon-bullhorn"></span>
                    <h4><strong>PÁGINA INICIAL</strong></h4>
                    <p>Clique aqui para retornar</p>
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

