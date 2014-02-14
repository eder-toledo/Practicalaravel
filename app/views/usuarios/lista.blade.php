@extends('layouts.master')

@section('content')
<h1>
    Lista de Usuarios



</h1>
<a class="btn btn-success" href="{{ ('usuarios/nuevo'); }}">Nuevo</a>
<table class="table table-bordered">
    @foreach($usuarios as $usuario)
    <tr>
        <td>
            {{ $usuario->nombre }}
        </td>
        <td>
            {{ $usuario->apellido }}
        </td>
        <td>
            {{ HTML::link( 'usuarios/'.$usuario->id , ' Detalles ' ) }}
        </td>
        <td>
            {{ HTML::link( 'usuarios/editar/'.$usuario->id , ' Editar ' ) }}
        </td>
    </tr>
    @endforeach
</table>
@stop