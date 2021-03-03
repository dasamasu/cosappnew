@extends('layouts.plantilla')


@section('title', 'mostrar producto' . $producto ->name)

@section('contenido')

<div class="container">

<h1>Producto: {{ $producto  -> name}}</h1>

<a href="{{route('productos.index')}}">Volver a producto</a>
<br>
<a href="{{route('productos.edit', $producto)}}">Editar producto</a>

<a href="">comprar producto</a>

<p><strong>Precio del producto: $</strong>{{$producto ->price}}</p>

<form action="{{route('productos.destroy', $producto)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Eliminar registro</button>
    <button href="{{route('compras.index')}}" class="btn btn-warning" >Comprar</button>
</form>
</div>
    
@endsection   
    
