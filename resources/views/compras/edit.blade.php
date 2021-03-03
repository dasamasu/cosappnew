@extends('layouts.plantilla')

@section('title', 'mostrar compra' . $compra ->name)

@section('contenido')

<h1>compra {{ $compra  -> name}}</h1>

<a href="{{route('productos.index')}}">Volver a productos</a>
<br>
<a href="{{route('productos.edit', $compra)}}">Editar compra</a>

<p><strong>Precio del producto: $</strong>{{$compra ->price}}</p>

<form action="{{route('productos.destroy', $compra)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar registro</button>
</form>
    
@endsection   