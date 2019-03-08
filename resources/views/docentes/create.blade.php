@extends('layouts.app')

@section('title')
    Nuevo docente
@endsection

@section('content')
    @include('docentes.form',['url'=>route('docentes.store'),'method'=>'POST'])
@endsection