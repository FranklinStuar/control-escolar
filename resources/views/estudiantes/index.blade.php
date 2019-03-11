@extends('layouts.app')

@section('title')
    Estudiantes
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('estudiantes.create')}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar estudiante</a>
        </div>
        <div class="widget-inner">
            <table>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Curso</th>
                        <th>Actividad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estudiantes as $estudiante)
                        <tr>
                            <td>{{$estudiante->persona->dni}}</td>
                            <td>{{$estudiante->persona->apellidos}} {{$estudiante->persona->nombres}}</td>
                            <td>{{$estudiante->curso->nombre}}</td>
                            <td>
                                <a href="{{route('estudiantes.edit',$estudiante->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a href="{{route('estudiantes.show',$estudiante->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ver</a>
                                <a class="delete btn-sm" href="{{route('estudiantes.index')}}"><i class="fa fa-close"></i> Eliminar</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
