@extends('layouts.app')

@section('title')
    Periodos
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('periodos.create')}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar Periodo</a>
        </div>
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th># de cursos</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($periodos as $periodo)
                        <tr>
                            <td>{{$periodo->nombre}}</td>
                            <td>{{$periodo->cursos->count()}}</td>
                            <td>
                                <a href="{{route('periodos.edit',$periodo->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a href="{{route('periodos.show',$periodo->id)}}" class="btn btn-default btn-sm"><i class="fas fa-pencil-alt"></i> Ver</a>
                                <a class="delete btn-sm" href="{{route('periodos.index')}}"><i class="fa fa-close"></i> Eliminar</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
