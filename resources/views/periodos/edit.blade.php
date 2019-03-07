@extends('layouts.app')

@section('title')
    Editar Periodo
@endsection

@section('content')
    @include('periodos.form',['url'=>route('periodos.update',$periodo->id),'method'=>'PUT'])
@endsection