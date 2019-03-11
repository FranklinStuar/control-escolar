@extends('layouts.app')

@section('title')
    Nuevo estudiante
@endsection

@section('content')
    @include('estudiantes.form',['url'=>route('estudiantes.store'),'method'=>'POST'])
@endsection