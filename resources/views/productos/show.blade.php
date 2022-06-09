@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1>{{$producto->nombre}}</h1>
</div>
<div class="row">
    <div class="col s8">
        <div class="row">
            <img class="activator" width="600" height="300"
            @if($producto->imagen != null) 
                src="{{asset('img/'.$producto->imagen)}}">
            @else
                src="{{asset('img/Error.jpg')}}">
            @endif
        </div>
        <div class="row">
            <ul>
                <li>{{$producto->descripcion}}</li>
                <li>Precio: ${{$producto->precio}}</li>
                <li>Tipo: {{$producto->categoria->nombre}}</li>
                <li>Marca: {{$producto->marca->nombre}}</li>
            </ul>
        </div>
    </div>
    <div class="col s4">
        <form method="POST" action="{{Route('carrito.store')}}">
            @csrf
            <div class="row">
                <h3>Añadir al carro de compras</h3>
            </div>
            <div class="row">
                <div class="col s4 input-field">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="cantidad">Cantidad</label>
                </div>
            </div>
            <div class="row">
                <div class="col s4">
                <button class="btn waves-effect #f57c00 orange darken-2" type="submit">
                    Añadir
                </button>
                </div>
            </div>
            <input type="hidden" name="producto_id" value="{{$producto->id}}">
            <input type="hidden" name="producto_nombre" value="{{$producto->nombre}}">
        </form>
    </div>
</div>
@endsection