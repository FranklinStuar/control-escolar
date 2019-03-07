@extends('layouts.app')

@section('title')
    Cursos
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('cursos.create')}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar Curso</a>
        </div>
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Periodo</th>
                        <th># de materias</th>
                        <th># de estudiantes</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td>{{$curso->codigo}}</td>
                            <td>{{$curso->nombre}}</td>
                            <td>{{$curso->periodo->nombre}}</td>
                            <td>{{$curso->materias->count()}}</td>
                            <td>{{$curso->estudiantes->count()}}</td>
                            <td>
                                <a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a class="delete btn-sm" href="{{route('cursos.index')}}"><i class="fa fa-close"></i> Eliminar</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
