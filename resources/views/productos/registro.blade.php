@extends('layouts.menu')
@section('contenido')
@if(session('comm'))
<div class="green-text">
    <span><h4>{{session('mensaje')}}</h4></span>
</div>
@endif
<div class="row">
    <h1 class="#f57c00 orange-text darken-2">Nuevo Producto</h1>
</div>
<div class="row">
    <form method="POST" action="{{route('productos.store')}}" class="col s12" 
    enctype="multipart/form-data">
    @csrf
        <div class="row">
            <div class="input-field col s8">
                <input placeholder="Nombre del producto" type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                <label for="nombre">Nombre</label>
                <div class="red-text">{{$errors->first('nombre')}}</div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <label for="desc">Descripcion</label>
                <textarea class="input-field" placeholder="Descripcion del producto" name="desc" id="desc">{{old('desc')}}</textarea>
                <span class="red-text">{{$errors->first('desc')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="imput-field col s8">
                <label for="precio">Precio</label>
                <input placeholder="Precio del producto" type="number" id="precio" name="precio" value="{{old('precio')}}">
                <span class="red-text">{{$errors->first('precio')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <label for="marca">
                Marca
                </label><br>
                <select name="marca" id="marca" value="{{old('nombre')}}">
                <option value="">Elija una marca</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id}}">
                            {{$marca->nombre}}
                        </option>
                    @endforeach
                </select>
                <span class="red-text">{{$errors->first('marca')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <label for="categoria">
                Categoria
                </label><br>
                <select name="categoria" id="categoria">
                    <option value="">Elija una categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">
                            {{$categoria->nombre}}
                        </option>
                    @endforeach
                </select>
                <span class="red-text">{{$errors->first('categoria')}}</span>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s8">
                <div class="btn #f57c00 orange darken-2">
                    <span>Imagen de producto</span>
                    <input type="file" name="imagen">
                </div>
            </div>
            <span class="red-text col s8">{{$errors->first('imagen')}}</span>
        </div>
        <div class="row">
            <div class="file-field input-field col s8">
                <button class="btn waves-effect #f57c00 orange darken-2" type="submit">
                        Guardar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection 