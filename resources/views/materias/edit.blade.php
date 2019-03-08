@extends('layouts.app')

@section('title')
    Editar materia
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            @include('materias.form',['url'=>route('materias.update',$materia->id),'method'=>'PUT'])
        </div>
        <div class="col-md-7">
            <div class="widget-box">
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Horarios</h4>
                            <ul>
                                @foreach ($materia->horarios as $horario)
                                    <li>
                                        {{$horario->dia}}: {{$horario->inicio}} - {{$horario->fin}} 
                                        <a class="delete" href="{{route('materias.horarios.quit',[$materia->id,$horario->id])}}"><i class="fa fa-close"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                            <hr>
                            <form action="{{route('materias.horarios.add',$materia->id)}}" class="edit-profile" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Agregar Horario</label>
                                        <div>
                                            <select name="horario_id" id="horario_id" required>
                                                @foreach ($horarios as $horario)
                                                    <option value="{{$horario->id}}">
                                                        {{$horario->dia}} {{$horario->inicio}} {{$horario->fin}} 
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <button type="submit" class="btn center">Agregar Horario</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <h4>Docentes</h4>
                            <ul>
                                @foreach ($materia->docentes as $docente)
                                    <li>
                                        {{$docente->persona->nombres}} {{$docente->persona->apellidos}} 
                                        <a class="delete" href="{{route('materias.docentes.quit',[$materia->id,$docente->id])}}"><i class="fa fa-close"></i></a>
                                    </li>
                                @endforeach
                            </ul>
                            <hr>
                            <form action="{{route('materias.docentes.add',$materia->id)}}" class="edit-profile" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label class="col-form-label">Agregar de docentes</label>
                                        <div>
                                            <select name="docente_id" id="docente_id" required>
                                                @foreach ($docentes as $docente)
                                                    <option value="{{$docente->id}}">
                                                        {{$docente->persona->nombres}} {{$docente->persona->apellidos}} 
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <hr>
                                    <button type="submit" class="btn center">Agregar Docente</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    </div>
@endsection