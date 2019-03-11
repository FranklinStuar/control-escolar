@extends('cursos.template')
@section('table')
    <div class="widget-box">
        <div class="wc-title">
            <h4 class="text-center"><span>Lista de estudiantes</h4>
        </div>
        <div class="widget-inner autoscroll">
            <table class="table ">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($curso->estudiantes as $estudiante)
                            <tr>
                                <td>{{$estudiante->persona->dni}}</td>
                                <td>{{$estudiante->persona->nombres}} {{$estudiante->persona->apellidos}}</td>
                                <td>{{$estudiante->curso->nombre}}</td>
                                <td>
                                    <a href="{{route('estudiantes.show',$estudiante->id)}}" class="btn btn-primary btn-sm"><i class="fas fa-pencil-alt"></i> Ver</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    
@endsection
