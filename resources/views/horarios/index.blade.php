@extends('layouts.app')

@section('title')
    Horarios
@endsection

@section('content')
    <div class="widget-box">
        
        <div class="widget-inner">
            <table class="table ">
                <tbody>
                    <tr>
                        <th>Lunes</th>
                        @foreach ($horarios['lunes'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'lunes'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Martes</th>
                        @foreach ($horarios['martes'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'martes'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Miercoles</th>
                        @foreach ($horarios['miercoles'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'miercoles'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Jueves</th>
                        @foreach ($horarios['jueves'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'jueves'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Viernes</th>
                        @foreach ($horarios['viernes'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'viernes'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Sábado</th>
                        @foreach ($horarios['sabado'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'sabado'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                    <tr>
                        <th>Domingo</th>
                        @foreach ($horarios['domingo'] as $horario)
                            <td><a href="{{route('horarios.show',$horario->id)}}"><u>{{$horario->inicio}} - {{$horario->fin}}</u></a></td>
                        @endforeach
                        <td>
                            <a href="{{route('horarios.create',['day'=>'domingo'])}}" class="btn">Nuevo Horario</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
@endsection
