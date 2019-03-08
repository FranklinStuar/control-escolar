@extends('layouts.app')

@section('title')
    Nueva Registro de Notas
@endsection

@section('content')
    @include('grupo-notas.form',['url'=>route('grupo-notas.store',$grupoNota->materia_id),'method'=>'POST'])
@endsection