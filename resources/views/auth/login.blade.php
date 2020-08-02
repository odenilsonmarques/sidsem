@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <form method="POST" action="{{route('login') }}">
                @csrf
                <h1 style="text-align:center">SidSem</h1>
                <h3 style="text-align:center">Sistema de Denuncia Semam</h3><br/>
                @error('email')
                    <div class="alert alert-danger text-center">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>  
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                           Relembre - me
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Esqueceu a senha ?
                        </a>
                    @endif
                </div>
            </form>      
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
@endsection
