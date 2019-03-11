@extends('layouts.form')
@section('title')
    Iniciar sesion
@endsection
@section('content')
    <form action="{{route('login')}}" class="contact-bx" method="POST">
        @csrf
        <div class="row placeani">
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group">
                        <label>Correo elctrónico</label>
                        <input name="email" type="email" required class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                    <div class="input-group"> 
                        <label>Contraseña</label>
                        <input name="password" type="password" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group form-forget">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                        <label class="custom-control-label" for="customControlAutosizing">Permanecer conectado</label>
                    </div>
                    <a href="{{ route('password.request') }}" class="ml-auto">¿Olvidó la contraseña?</a>
                </div>
            </div>
            <div class="col-lg-12 m-b30">
                <button name="submit" type="submit" value="Submit" class="btn button-md">Iniciar sesión</button>
            </div>
        </div>
    </form>
@endsection