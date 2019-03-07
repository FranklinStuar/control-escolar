@extends('layouts.app')

@section('title')
    Nuevo Curso
@endsection

@section('content')
    @include('cursos.form',['url'=>route('cursos.store'),'method'=>'POST'])
@endsection