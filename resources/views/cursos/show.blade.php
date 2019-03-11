@extends('cursos.template')
@section('table')
    <div class="widget-box">
        <div class="wc-title">
            <h4><span>Materias</h4>
        </div>
        <div class="widget-inner">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Materia</th>
                        <th>Créditos</th>
                        <th>Promedio Nota</th>
                        <th>Horarios</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($curso->materias as $materia)
                        <tr>
                            <td>{{$materia->codigo}}</td>
                            <td>{{$materia->nombre}}</td>
                            <td>{{$materia->creditos}}</td>
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
                    <tr>
                        <td>
                                <a href="{{route('cursos.materias.list-add',$curso->id)}}" class="btn-secondry add-item m-r5"><i class="fa fa-fw fa-plus-circle"></i>Agregar materia</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
