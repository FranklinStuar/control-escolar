@extends('layouts.app')

@section('title')
    Nuevo Horario
@endsection

@section('content')
    @include('horarios.form',['url'=>route('horarios.store'),'method'=>'POST'])
@endsection