@extends('layouts.app')

@section('title')
    Editar docente
@endsection

@section('content')
    @include('docentes.form',['url'=>route('docentes.update',$docente->id),'method'=>'PUT'])
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="widget-box">
                <div class="widget-inner">
                    <h4>Materias</h4>
                    <ul>
                        @foreach ($docente->materias as $materia)
                            <li>
                                {{$materia->codigo}}: {{$materia->nombre}}
                                <a class="delete" href="{{route('docentes.materias.quit',[$docente->id,$materia->id])}}"><i class="fa fa-close"></i></a>
                            </li>
                        @endforeach
                    </ul>
                    <hr>
                    <form action="{{route('docentes.materias.add',$docente->id)}}" class="edit-profile" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <label class="col-form-label">Agregar materia</label>
                                <div>
                                    <select name="materia_id" id="materia_id" required>
                                        @foreach ($materias as $materia)
                                            <option value="{{$materia->id}}">
                                                {{$materia->codigo}}: {{$materia->nombre}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <hr>
                            <button type="submit" class="btn center">Agregar materia</button>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
@endsection