@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1 class="#f57c00 orange-text darken-2">Nuevo Producto</h1>
</div>
<div class="row">
    <form method="POST" action="{{route('productos.store')}}" class="col s12" @csrf>
        <div class="row">
            <div class="imput-field col s8">
                <label for="nombre">Nombre</label>
                <input placeholder="Nombre del producto" type="text" id="nombre" name="nombre">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <label for="desc">Descripcion</label>
                <input placeholder="Descripcion del producto" type="text" name="desc" id="desc">
                </textarea>
            </div>
        </div>
        <div class="row">
            <div class="imput-field col s8">
                <label for="precio">Precio</label>
                <input placeholder="Precio del producto" type="text" id="precio" name="precio">
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <label for="marca">
                Elija una marca
                </label><br>
                <select name="marca" id="marca">
                    @foreach($marcas as $marca)
                        <option value="">
                            {{$marca->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col s8 input-field">
                <label for="categoria">
                Elija una categoria
                </label><br>
                <select name="categoria" id="categoria">
                    @foreach($categorias as $categoria)
                        <option value="">
                            {{$categoria->nombre}}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s8">
                <div class="btn #f57c00 orange darken-2">
                    <span>Imagen de producto</span>
                    <input type="file" name="imagen">
                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect #f57c00 orange darken-2" type="submit">
                <div class="material-icons right">
                    Guardar
                </div>
            </button>
        </div>
    </form>

</div>
@endsection 