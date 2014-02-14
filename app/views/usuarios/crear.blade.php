@extends('layouts.master')

@section('sidebar')
     @parent
     <h1>Formulario de usuario</h1>
@stop

@section('content')
        <h3>
Crear Usuario



</h3>
        {{ Form::open(array('url' => 'usuarios/crear')) }}
            {{Form::label('nombre', 'Nombre')}}
            {{Form::text('nombre', '')}}
            {{Form::label('apellido', 'Apellido')}}
            {{Form::text('apellido', '')}}
            {{Form::submit('Guardar', array('class' => 'btn btn-success'))}}
        {{ Form::close() }}
<br>
{{ HTML::link('usuarios', 'volver', array('class' => 'btn btn-info')); }}
@stop

