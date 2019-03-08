@extends('layouts.app')

@section('title')
    Nueva Materia
@endsection

@section('content')
    @include('materias.form',['url'=>route('materias.store'),'method'=>'POST'])
@endsection