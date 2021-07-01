@extends('adminlte::page')

@section('title', 'vacante')

@section('content_header')
<h1>Detalle de vacante</h1>
@stop

@section('content')

{{-- <a class="btn btn-secondary btn-sm float-left" href="{{route('admin.vacancies.create')}}">Crear nueva vacante</a>
<h1>Detalle del post</h1>
@stop --}}

{{-- @section('content')

@if(session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>
@endif

@livewire('admin.vacancies-index')
@stop --}}

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop