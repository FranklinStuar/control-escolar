@extends('layouts.app')

@section('title')
    Estudiante: {{$estudiante->codigo}}
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Estudiante</h4>
                </div>
                <div class="widget-inner">
                    @if ($estudiante->persona->foto)
                        <img class="foto" src="{{url(Storage::url($estudiante->persona->foto))}}" alt="{{$estudiante->persona->nombres}} {{$estudiante->persona->apellidos}}">
                    @endif
                    <table class="table">
                        <tr>
                            <th>DNI:</th>
                            <td>{{$estudiante->persona->dni}}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{$estudiante->persona->apellidos}} {{$estudiante->persona->nombres}}</td>
                        </tr>
                        <tr>
                            <th>Correo Electrónico:</th>
                            <td>{{$estudiante->persona->email}}</td>
                        </tr>
                        <tr>
                            <th>Curso:</th>
                            <td>{{$estudiante->curso->nombre}}</td>
                        </tr>
                    </table>
                    <a href="{{route('estudiantes.notas.index',$estudiante->id)}}" class="btn btn-info add-item m-r5">Notas</a>
                    <a href="{{route('estudiantes.asistencias.index',$estudiante->id)}}" class="btn btn-info add-item m-r5">Asistencias</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Representante</h4>
                </div>
                <div class="widget-inner">
                    <table class="table">
                        <tr>
                            <th>DNI:</th>
                            <td>{{$estudiante->dni}}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{$estudiante->nombres}} {{$estudiante->apellidos}}</td>
                        </tr>
                        <tr>
                            <th>Correo electrónico:</th>
                            <td>{{$estudiante->persona->email}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
       
    </div>
  
@endsection
