@extends('layouts.plantilla')

@section('title', 'productos')

@section('contenido')

<div class="container">
<br>
<h1 class="text-center">Aquí podras visualizar los productos en venta</h1>
    
</div>
<br>
<table class="table table-dark table-striped mt-4">

    <thead>
        <tr>
            <th class="text-center" scope="col"> Id </th>
            <th class="text-center" scope="col"> Nombre producto </th>
            <th class="text-center" scope="col"> Precio </th>
        </tr>
    </thead>

<tbody>

    @foreach ($productos as $producto)

    <div class="container">
<tr>
    
     <td class="text-center">   <a href="{{route('productos.show', $producto->id)}}">{{$producto->id}}</a> </td>
     <td class="text-center">   <a href="{{route('productos.show', $producto->id)}}">{{$producto->name}}</a> </td>
     <td class="text-center">   <a href="{{route('productos.show', $producto->id)}}">{{$producto->price}}</a> </td>
   
</tr>
    </div>
        
    @endforeach
</tbody>


</table>

<div class="container">

<button type="button" class="btn btn-primary">
    <a href="{{route('productos.create')}}" class="text-white">Crear producto</a>
    </button>
<br><br>


{{$productos->links()}}

</div>
    
@endsection    


