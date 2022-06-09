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
                <p><a href="{{url('productos/'.$producto->id)}}">Ver detalles</a></p>
            </div>
            <div class="card-reveal">
                <span class="card-title grey-text text-darken-4">{{$producto->nombre}}<i class="material-icons right red-text">close</i></span>
                <ul>
                    <li>Descripcion: <span class="light-blue-text">{{$producto->descripcion}}</span></li>
                    <li>Precio: <span class="green-text">{{$producto->precio}}</span></li>
                    <li>Categoria: <span class="#f57f17 yellow-text text-darken-4">{{$producto->categoria->nombre}}</span></li>
                    <li>Marca:<span class="grey-text"> {{$producto->marca->nombre}}</span></li>
                </ul>
            </div>
        </div>
    @endforeach
@endsection