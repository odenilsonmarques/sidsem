@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4 body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>SidSem</h1>
                <h3>Sistema de Denuncia Semam</h3><br/>

                <div class="form-group">
                    <label for="name">Nome</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus onKeypress="return letras(event)" placeholder="Digite o nome">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite o email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="matricula">Matricula</label>
                        <input id="matricula" type="matricula" class="form-control @error('matricula') is-invalid @enderror" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" onkeyup="somenteNumeros(this);" maxlength="7" placeholder="Digite a matricula">
                        @error('matricula')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Digite a senha"> 
                </div>
                <div class="form-group">
                    <label for="password-confirm">Confirme a senha</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme a senha">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection
<script type="text/javascript" src="{{('/assets/js/somenteLetras.js')}}"></script>
<script type="text/javascript" src="{{('/assets/js/somenteNumeros.js')}}"></script>