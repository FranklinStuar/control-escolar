@extends('cursos.template')
@section('table')
    <div class="widget-box">
        <div class="wc-title">
            <h4 class="text-center"><span>Asistencia</h4>
        </div>
        <div class="widget-inner">
            <form action="{{route('dia-asistencias.store',$curso->id)}}" class="edit-profile" method="POST">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label class="control-label">Agregar Asistencia</label>
                    </div>
                    <div class="col-4">
                        <input name="fecha" class="form-control" type="date" value="{!!Carbon\Carbon::now()->format('Y-m-d')!!}" required>
                    </div>
                    <div class="col-4">
                        <button class="btn" type="submit">Agregar</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
        <div class="widget-inner autoscroll">
            <table class="large-list">
                <thead>
                    <tr>
                        <th class="title-horizontal">Estudiante</th>
                        @foreach ($dias as $dia)
                            <th>
                                <a href="{{route('dia-asistencias.show',[$curso->id,$dia->id])}}">
                                    <u>
                                        {!!\Carbon\Carbon::createFromFormat('Y-m-d', $dia->fecha)->format('d/M/Y')!!}
                                        
                                    </u>
                                </a>
                            </th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asistencias as $asistencia)
                        <tr>
                            <th>{{$asistencia['estudiante']}}</th>
                            @foreach ($asistencia['dias'] as $dia)
                                <td>
                                    @if ($dia->tipo == 'T')
                                        Atrasado
                                    @elseif ($dia->tipo == 'A')
                                        Asiste
                                    @elseif ($dia->tipo == 'Fj')
                                        Falta Injustificada
                                    @elseif ($dia->tipo == 'Fi')
                                        Falta Justificada
                                    @endif
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
