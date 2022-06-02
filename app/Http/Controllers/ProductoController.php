<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Seleccionar Marcas
        $marcas = Marca::all();
        //Seleccion de categorias
        $categorias = Categoria::all();
        //Mostrar la vista
        return view('productos.registro')
                ->with('marcas',$marcas)
                ->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //Reglas de validacion de campos
        $reglas = [
            "nombre"=>'required|alpha',
            "desc"=>'',
            "precio"=>'numeric|required',
            "marca"=>'required|numeric',
            "categoria"=>'required|numeric',
            "imagen"=>'required|image'
        ];
        $mensajes = [
            "required" => "El campo es obligatorio",
            "alpha" => "Solo letras",
            "numeric" => "Solo puede contener numeros",
            "image" => 'Solo se aceptan "jpg, jpeg, png, bmp, gif, svg y webp"'
        ];
        //Crear objeto de validacion
        $validation = Validator::make($r->all(),$reglas,$mensajes);
        //Validar los datos
        if($validation->fails()){
            return redirect('productos/create')
            ->withErrors($validation)
            ->withInput();
        }
        else{
        //acceder a propiedades del archivo
        $archivo = $r->imagen;
        $nombre_archivo = $archivo->getClientOriginalName();
        //establecer la ubicacion de almacenamiento
        $ruta=(public_path()."/img");
        //mover el archivo
        $archivo->move($ruta,$nombre_archivo);

        //Crear nuevo producto<<entity>>
        $p =new Producto;
        //Asignar valores a los atributos
        $p->nombre = $r->nombre;
        $p->descripcion = $r->desc;
        $p->precio = $r->precio;
        $p->marca_id = $r->marca;
        $p->categoria_id = $r->categoria;
        $p->imagen = $nombre_archivo;
        //Guardar en la bd
        $p->save();
        return redirect('productos/create')
            ->with('mensaje',"Producto registrado");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Detalles de producto $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "form de actualizacion del prod $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}