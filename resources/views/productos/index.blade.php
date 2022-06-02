@extends('layouts.menu')
@section('contenido')
    <div class="row">
        <h3>Catálogo de Productos</h3>
    </div>
    @foreach($productos as $producto)
        <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" width="800" height="500" 
                @if($producto->imagen != null) 
                    src="{{asset('img/'.$producto->imagen)}}">
                @else
                    src="{{asset('img/Error.jpg')}}">
                @endif
            </div>
            <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">{{$producto->nombre}}<i class="material-icons right">more_vert</i></span>
                <p><a href="#">Ver detalles</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{$producto->nombre}}<i class="material-icons right">close</i></span>
                <ul>
                    <li><div class="light-blue-text">{{$producto->descripcion}}</div></li>
                    <li>Precio: <span class="green-text">{{$producto->precio}}</span></li>
                    <li class="yellow-text">{{$producto->categoria_id}}</li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection