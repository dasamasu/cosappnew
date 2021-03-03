@extends('layouts.plantilla')


@section('title', 'editar productos')

@section('contenido')


<div class="container">
<h1>Aquí podrás editar tu producto</h1>

<form action="{{route('productos.update', $producto)}}" method="POST">
    @csrf
    @method('put')
    <label >
        Nombre del producto
        <input type="text" name="name" value="{{old('name', $producto->name) }}">
    </label>
   
<br>

@error('name')
        <small>*{{$message}}</small>
@enderror

<br>
    <label >
        Precio del Producto
        <input type="text" name="price" value="{{old('price', $producto->price)}}">
    </label>
    <br>
    @error('price')
        <small>*{{$message}}</small>
@enderror
    <br>
    <button type="submit" class="btn btn-success">Actualizar producto</button>
</form>
</div>
    
@endsection   