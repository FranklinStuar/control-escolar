@extends('layouts.app')

@section('title')
    Editar Horario
@endsection

@section('content')
    @include('horarios.form',['url'=>route('horarios.update',$horario->id),'method'=>'PUT'])
    <div class="widget-box">
        <div class="wc-title">
            <h4>Materias</h4>
        </div>
        <div class="widget-inner">
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($horario->materias as $materia)
                        <tr>
                            <td>{{$materia->codigo}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->curso->nombre}}</td>
                            <td><a href="{{route('materias.show',$materia->id)}}" class="btn">ver</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection