@extends('layouts.app')

@section('title')
    Editar estudiante
@endsection

@section('content')
    @include('estudiantes.form',['url'=>route('estudiantes.update',$estudiante->id),'method'=>'PUT'])
@endsection
