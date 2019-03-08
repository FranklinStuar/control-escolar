@extends('layouts.app')

@section('title')
    Notas
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="widget-box">
                <div class="wc-title">
                    <h4>{{$grupoNota->nombre}}</h4>
                </div>
                <div class="widget-inner">
                    <div class="row">
                        <div class="col-4 bold">Concepto</div>
                        <div class="col-8"><span class="form-control">{{$grupoNota->observacion}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4 bold">Fecha</div>
                        <div class="col-8"><span class="form-control">{{$grupoNota->fecha}}</span></div>
                    </div>
                    <div class="row">
                        <div class="col-4 bold">Materia</div>
                        <div class="col-8"><span class="form-control">{{$grupoNota->materia->nombre}}</span></div>
                    </div>
                    
                
                        <div class="row">
                            <div class="col-4 bold">Nota </div>
                            <div class="col-8"><span class="form-control">{{$grupoNota->nota_limite }}</span></div>
                        </div>
                
                        <div class="row">
                            <div class="col-4 bold">Nota real </div>
                            <div class="col-8"><span class="form-control">{{$grupoNota->nota_equivalente }}</span></div>
                        </div>
                        <small>
                            <b>Nota:</b> La nota real es la que se utiliza en el sistema para hacer suma de calificaciones. 
                            Esta nota se toma como referencia para las notas de los alumnos
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="widget-box">
                <div class="wc-title">
                </div>
                <div class="widget-inner">
                    <table class="table ">
                        <thead>
                            <tr class="list-item">
                                <td>
                                    <div class="row">
                                        <div class="col-3">Alumno</div>
                                        <div class="col-2">Fecha registrado</div>
                                        <div class="col-2">Nota / {{$grupoNota->nota_limite}}</div>
                                        <div class="col-2">Nota / {{$grupoNota->nota_equivalente}}</div>
                                        <div class="col-3"></div>
                                    </div>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($grupoNota->notas as $nota)
                                <tr class="list-item">
                                    <td>
                                        <form action="{{route('notas.update',[$grupoNota->materia_id,$grupoNota->id,$nota->id])}}" method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div class="row">
                                                <div class="col-3">{{$nota->alumno->persona->nombres}} {{$nota->alumno->persona->apellidos}}</div>
                                                <div class="col-2">
                                                    <input name="fecha" class="form-control" type="date" value="{{$grupoNota->fecha}}" required>
                                                </div>
                                                <div class="col-2">
                                                    <input name="nota" class="form-control" type="number" value="{{$grupoNota->nota}}" required>
                                                </div>
                                                <div class="col-2"><span class="form-contro">{{$nota->notaReal()}}</span></div>
                                                <div class="col-2">
                                                    <input name="observacion" class="form-control" type="text" value="{{$grupoNota->observacion}}" required>
                                                </div>
                                                <div class="col-3">
                                                    <button type="submit" class="btn">Modificar</button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
@endsection
