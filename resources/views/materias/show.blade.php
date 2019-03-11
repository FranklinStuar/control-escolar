@extends('layouts.app')

@section('title')
    Editar materia
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Materia</h4>
                </div>
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-4 bold">Código</div>
                        <div class="col-8"><span class="form-control">{{$materia->codigo}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4 bold">Nombre</div>
                        <div class="col-8"><span class="form-control">{{$materia->nombre}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4 bold">Créditos</div>
                        <div class="col-8"><span class="form-control">{{$materia->creditos}} Créditos</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4 bold">Curso</div>
                        <div class="col-8"><span class="form-control">{{$materia->curso->nombre }}</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Horarios</h4>
                </div>
                <div class="widget-inner">
                    <ul>
                        @foreach ($materia->horarios as $horario)
                            <li>{{$horario->dia}}: {{$horario->inicio}} - {{$horario->fin}} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>Docentes</h4>
                </div>
                <div class="widget-inner">
                    <ul>
                        @foreach ($materia->docentes as $docente)
                            <li>{{$docente->persona->nombres}} {{$docente->persona->apellidos}} </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('grupo-notas.create',$materia->id)}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar Registro de notas</a>
        </div>
        <div class="widget-inner">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Concepto</th>
                        <th>Nota sobre/</th>
                        <th>Objetivo de la nota</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materia->grupoNotas as $nota)
                        <tr>
                            <td>{{$nota->fecha}}</td>
                            <td>{{$nota->nombre}}</td>
                            <td>{{$nota->nota_limite}}</td>
                            <td>{{$nota->observacion}}</td>
                            <td><a href="{{route('grupo-notas.show',[$materia->id,$nota->id])}}" class="btn-secondry add-item m-r5">Ver notas de estudiantes</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
@endsection