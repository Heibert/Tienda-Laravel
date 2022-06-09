@extends('layouts.menu')
@section('contenido')
@if(!session('cart'))
    <p>No existe la variable</p>
@else
    <div class="row">
        <ul>
        <li><h1>{{(session('cart')[0]["nombre"])}}</h1></li>
        <li>Cantidad: {{(session('cart')[0]["cantidad"])}}</li>
        </ul>
    </div>
@endif
<form action="{{route('carrito.destroy',1)}}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn waves-effect #f57c00 orange darken-2" type="submit">
        Eliminar carrito
    </button>
</form>
@endsection