@extends('layouts.form')
@section('title')
    Iniciar sesion
@endsection
@section('content')
    <div class="account-form-inner">
        <div class="account-container">
            <div class="heading-bx left">
                <h2 class="title-head">Iniciar sesión </h2>
            </div>	
            <form class="contact-bx">
                @csrf
                <div class="row placeani">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label>Correo elctrónico</label>
                                <input name="name" type="email" required="" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <div class="input-group"> 
                                <label>Contraseña</label>
                                <input name="password" type="password" class="form-control" required="">
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
        </div>
    </div>
@endsection