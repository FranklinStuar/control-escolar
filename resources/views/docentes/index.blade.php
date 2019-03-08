@extends('layouts.app')

@section('title')
    Docentes
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('docentes.create')}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar Docente</a>
        </div>
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Materias</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($docentes as $docente)
                        <tr>
                            <td>{{$docente->codigo}}</td>
                            <td>{{$docente->persona->dni}}</td>
                            <td>{{$docente->persona->nombres}} {{$docente->persona->apellidos}}</td>
                            <td>{{$docente->materias->count()}}</td>
                            <td>
                                <a href="{{route('docentes.edit',$docente->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a href="{{route('docentes.show',$docente->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ver</a>
                                <a class="delete btn-sm" href="{{route('docentes.index')}}"><i class="fa fa-close"></i> Eliminar</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
