{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <x-jet-welcome />
        </div>
    </div>
</div>
</x-app-layout> --}}
@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
<div class="text-center">
    <h1 class="text-3xl text-gray-700 mb-2 uppercase">Vacantes</h1>
</div>
@stop

@section('content')

@if (Auth::user()->hasRole('Developers'))
<h3 class="bg-green rounded-lg w-28">Desarrollador</h3>
<div class="mb-3 bg-gray-700 rounded-lg">
    <livewire:vacancies-list>

        <a class="btn btn-primary" href="{{url('/vacancies/create')}}" role="button">Aplicar</a>
</div>

{{--<livewire:vacancie-list> --}}
@elseif (Auth::user()->hasRole('Recruiter'))
<div class="mb-3">
    {{-- <a class="btn btn-primary" href="{{url('/vacancies/create')}}" role="button">Agregar vacante</a> --}}
</div>

<livewire:vacancies-list>

    <footer class="w-full ">
        <x-footer />

    </footer>
    {{-- <livewire:vacancie-list> --}}
    @elseif (Auth::user()->hasRole('Admin'))
    <h1>administrador</h1>

    {{-- <livewire:vacancie-list> --}}
    @endif
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @stop

    @section('js')
    <script>
    console.log('Hi!');
    </script>
    @stop