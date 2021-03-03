@extends('layouts.plantilla')

@section('title', 'crear productos')


@section('contenido')


<div class="container">
<h1 class="text-center">Aquí podrás añadir un producto</h1>
<br>


<form class="form-label" action="{{route('productos.store')}}" method="POST">
    @csrf
    <label class="form-label" >
        Nombre del producto
        <input type="text" name="name" value="{{old('name')}}">
    </label>
<br>
@error('name')
    <br>
    <small>*{{$message}}</small>
    <br>
@enderror
<br>
    <label >
        Precio del Producto
        <input type="text" name="price" value="{{old('price')}}">
    </label>
    <br>
    @error('price')
    <br>
    <small>*{{$message}}</small>
    <br>
@enderror
    <br>
    <button type="submit" class="btn btn-primary">Crear producto</button>
</form>

</div>
    
@endsection   
