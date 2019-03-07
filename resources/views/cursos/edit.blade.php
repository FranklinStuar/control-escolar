@extends('layouts.app')

@section('title')
    Editar Curso
@endsection

@section('content')
    @include('cursos.form',['url'=>route('cursos.update',$curso->id),'method'=>'PUT'])
@endsection