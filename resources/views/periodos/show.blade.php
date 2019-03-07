@extends('layouts.app')

@section('title')
    Periodo {{$periodo->nombre}}
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <h4><span>Periodo: </span> {{$periodo->nombre}} - <span>Lista de cursos</span></h4>
        </div>
        
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Código del curso </th>
                        <th>Nombre de cursos</th>
                        <th># de Estudiantes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periodo->cursos as $curso)
                        <tr>
                            <td>{{$curso->codigo}}</td>
                            <td>{{$curso->nombre}}</td>
                            <td>{{$curso->estudiantes->count()}}</td>
                            <td>
                                <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
