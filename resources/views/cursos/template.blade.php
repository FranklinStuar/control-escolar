@extends('layouts.app')

@section('title')
    Curso: {{$curso->codigo}}
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <h4>Detalles</h4>
        </div>
        <div class="widget-inner">
            <div class="row">
                <div class="col-6">
                    <table class="table">
                        <tr>
                            <td>Nombre:</td>
                            <td>{{$curso->nombre}}</td>
                        </tr>
                        <tr>
                            <td>Periodo:</td>
                            <td>{{$curso->periodo->nombre}}</td>
                        </tr>
                    </table>
                    <a href="{{route('cursos.estudiantes.index',$curso->id)}}" class="btn btn-info add-item m-r5">Estudiantes</a>
                    <a href="{{route('dia-asistencias.index',$curso->id)}}" class="btn btn-info add-item m-r5">Asistencias</a>
                    <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-info add-item m-r5">Materias</a>
                </div>
                <div class="col-6">
                    <h5>Docentes</h5>
                    <ul>
                        @foreach ($curso->docentes() as $docente)
                            <li>{{$docente->codigo}}: {{$docente->persona->nombres}} {{$docente->persona->apellidos}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @yield('table')
@endsection
