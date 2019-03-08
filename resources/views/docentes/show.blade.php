@extends('layouts.app')

@section('title')
    Docente: {{$docente->codigo}}
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <h4>Detalles</h4>
        </div>
        <div class="widget-inner">
            <div class="row">
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>DNI:</th>
                            <td>{{$docente->persona->dni}}</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>{{$docente->persona->nombres}} {{$docente->persona->apellidos}}</td>
                        </tr>
                        <tr>
                            <th>Correo Electrónico:</th>
                            <td>{{$docente->persona->email}}</td>
                        </tr>
                        <tr>
                            <th>Estudios Superiores:</th>
                            <td>{{$docente->lugar_studio}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-6 col-offset-6">
                            <img src="{{url(Storage::url($docente->persona->foto))}}" alt="{{$docente->persona->nombres}} {{$docente->persona->apellidos}}">
                        </div>
                    </div>
                    <hr>
                    <table class="table">
                        <tr>
                            <th>Hoja de vida</th>
                            <td>
                                <u><a href="{{url(Storage::url($docente->curriculum_vitae))}}">Descargar</a></u>
                            </td>
                        </tr>
                        <tr>
                            <th>Antecentes penales</th>
                            <td>
                                <u><a href="{{url(Storage::url($docente->antecedentes_penales))}}">Descargar</a></u>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-box">
        <div class="wc-title">
            <h4><span>Materias</h4>
        </div>
        <div class="widget-inner">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Materia</th>
                        <th>Curso</th>
                        <th>Promedio</th>
                        <th>Horarios</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docente->materias as $materia)
                        <tr>
                            <td>{{$materia->codigo}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->curso->nombre}}</td>
                            <td>{{$materia->promedioNota()}}</td>
                            <td>
                                <ul>
                                    @foreach ($materia->horarios as $horario)
                                        <li><b>{{$horario->dia}}:</b> {{$horario->inicio}} - {{$horario->fin}}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <a href="{{route('materias.show',$materia->id)}}" class="btn-secondry add-item m-r5">Ver materia</a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
