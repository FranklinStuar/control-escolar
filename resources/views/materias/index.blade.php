@extends('layouts.app')

@section('title')
    Materias
@endsection

@section('content')
    <div class="widget-box">
        <div class="wc-title">
            <a href="{{route('materias.create')}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar materia</a>
        </div>
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Créditos</th>
                        <th>Curso</th>
                        <th>Horarios</th>
                        <th>Docentes</th>
                        <th>Nota Promedio</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materias as $materia)
                        <tr>
                            <td>{{$materia->codigo}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->creditos}}</td>
                            <td>{{$materia->curso->nombre}}</td>
                            <td>
                                <ul>
                                    @foreach ($materia->horarios as $horario)
                                        <li>
                                            {{$horario->día}}: {{$horario->inicio}} {{$horario->fin}} 
                                        </li>
                                    @endforeach
                                </ul>                                
                            </td>
                            <td>{{$materia->docentes->count()}}</td>
                            <td>{{$materia->promedioNota()}}</td>
                            <td>
                                <a href="{{route('materias.edit',$materia->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Editar</a>
                                <a href="{{route('materias.show',$materia->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i> Ver</a>
                                <a class="delete btn-sm" href="{{route('materias.index')}}"><i class="fa fa-close"></i> Eliminar</a>
                                
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
