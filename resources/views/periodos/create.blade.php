@extends('layouts.app')

@section('title')
    Nuevo Periodo
@endsection

@section('content')
    @include('periodos.form',['url'=>route('periodos.store'),'method'=>'POST'])
@endsection