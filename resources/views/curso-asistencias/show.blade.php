@extends('cursos.template')
@section('table')
    <div class="widget-box">
        <div class="wc-title">
            <h4 class="text-center"><span>Asistencia {!!\Carbon\Carbon::createFromFormat('Y-m-d', $diaAsistencia->fecha)->format('d M Y')!!}</h4>
        </div>
        <div class="widget-inner">
            <form action="{{route('dia-asistencias.destroy',[$curso->id,$diaAsistencia->id])}}" class="edit-profile" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="delete">Eliminar asistencia del {!!\Carbon\Carbon::createFromFormat('Y-m-d', $diaAsistencia->fecha)->format('d-M-Y')!!}</button>
            </form>
        </div>
        <div class="widget-inner autoscroll">
            <table class="table">
                <thead>
                    <tr>
                        <th class="title-horizontal">Estudiante</th>
                        <th>
                            <div class="row">
                                <div class="col-4">Tipo de asistencia</div>
                                <div class="col-4">Observación</div>
                                
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($diaAsistencia->asistencias as $asistencia)
                        <tr>
                            <th>{{$asistencia->estudiante->persona->apellidos}} {{$asistencia->estudiante->persona->nombres}}</th>
                            <td>
                                <form action="{{route('dia-asistencias.destroy',[$curso->id,$asistencia->id])}}" class="edit-profile" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="row">
                                        <div class="col-4">
                                            <select name="tipo"  class="form-control">
                                                @foreach ($tiposAsistencia as $tipo)
                                                    <option value="{{$tipo[0]}}"
                                                        @if ($tipo[0]==$asistencia->tipo)
                                                            selected
                                                        @endif
                                                    >{{$tipo[1]}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <input name="observacion" type="text" value="{{$asistencia->observacion}}" required>
                                        </div>
                                        <div class="col-4">
                                            <button type="submit">Guardar</button>
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
    
@endsection
