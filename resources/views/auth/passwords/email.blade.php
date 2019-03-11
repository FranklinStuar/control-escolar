@extends('layouts.form')
@section('title')
    Recuperar contraseña
@endsection
@section('content')
    <form method="POST" action="{{ route('password.email') }}" class="contact-bx">
        @csrf

        <div class="row placeani">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Correo elctrónico</label>
                        <input name="email" type="email" required="" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" autofocus value="{{ $email ?? old('email') }}" >
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group form-forget">
                    <div class="custom-control custom-checkbox">
                    </div>
                    <a href="{{ route('login') }}" class="ml-auto">Iniciar sesión</a>
                </div>
            </div>
            <div class="col-lg-12 m-b30">
                <button name="submit" type="submit" value="Submit" class="btn button-md">Recuperar contraseña</button>
            </div>
            
        </div>
    </form>
@endsection



