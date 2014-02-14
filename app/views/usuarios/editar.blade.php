@extends('layouts.master')

@section('sidebar')
@parent
<h1>
    Información de usuario
</h1>

@stop

@section('content')

<h3>
    Usuario {{$usuario->id}}

</h3>
<form>
    <input type="hidden" value="{{$usuario->id}}">
    <label>Nombre</label>
    <input value="{{ $usuario->nombre }}"/>
    <label>Apellido</label>
    <input value="{{ $usuario->apellido }}">
    {{Form::submit('Guardar', array('class' => 'btn btn-success'))}}
</form>
{{ HTML::link('usuarios', 'Volver', array('class'=>'btn btn-info')); }}
<br />
@stop