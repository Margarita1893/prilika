@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Crear nueva vacante</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.vacancies.store', 'autocomplete' =>'off']) !!}

<<<<<<< HEAD
        {!! Form::hidden('user_id', auth()->user()->id) !!}
        <div class="form-group">
            {!! Form::label('name', 'Título') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'título de la vacante']) !!}

            @error('name')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- se trae la categoría -->
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control', 'placeholder' => 'Selecciona
            una categoría']) !!}

            @error('category_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>


        <!-- DESCRIPCIÓN -->
        <div class="form-group">
            {!! Form::label('description', 'Descripción del cargo') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control','placeholder' => 'Descripción de la
            vacante']) !!}

            @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- PAÍS -->
        <div class="form-group">
            {!! Form::label('country_id', 'País') !!}
            {!! Form::select('country_id', $countries, null, ['class' => 'form-control', 'placeholder' => 'Selecciona un
            país']) !!}

            @error('country_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- RANGO SALARIAL -->
        <div class="form-group">
            {!! Form::label('salary_id', 'Rango salarial') !!}
            {!! Form::select('salary_id', $wages, null, ['class' => 'form-control']) !!}

            @error('salary_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- TIPO MONEDA -->
        <div class="form-group">
            {!! Form::label('currency_id', 'Tipo de moneda') !!}
            {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control']) !!}

            @error('currency_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- TIEMPO DE EXPERIENCIA -->
        <div class="form-group">
            {!! Form::label('experience_id', 'Experiencia requerida') !!}
            {!! Form::select('experience_id', $experiences, null, ['class' => 'form-control']) !!}

            @error('experience_id')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>

        <!-- TECNOLOGÍAS -->
        <div class="form-group">
            <p class="font-weight-bold">Tecnologías requeridas</p>

            @foreach($tecnologies as $tecnology)

            <label class="mr-2">
                {!! Form::checkbox('tecnologies[]', $tecnology->id, null) !!}
                {{$tecnology->name}}
            </label>

            @endforeach

            @error('tecnologies')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- FECHA FINAL -->
        <div class="form-group">
            {!! Form::label('end', 'Fecha limite de la vacante') !!}
            {!! Form::date('end', null, ['class' => 'form-control']) !!}

            @error('end')
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>
        <!-- ESTADO -->
        <div class="form-group">
            <p class="font-weight-bold">Estado</p>
            <label class="mr-2">
                {!! Form::radio('status',1, true) !!}
                Borrador
            </label>

            <label class="mr-2">
                {!! Form::radio('status',2) !!}
                Publicar
            </label>

            @error('status')
            <br>
            <small class="text-danger">{{$message}}</small>
            @enderror

        </div>
        {!! Form::submit('Crear Vacante', ['class' => 'btn btn-primary']) !!}
=======
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            @include('admin.vacancies.partials.form')
           
           {!! Form::submit('Crear Vacante', ['class' => 'btn btn-primary']) !!}
>>>>>>> 346ab71cdfc5213d76bf16e0b336351690241333

        {!! Form::close() !!}
    </div>
</div>
<h1></h1>
@stop