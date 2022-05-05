<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Ruta de arreglos */
/* $Estudiantes =["CA" => "Carlos","J" => "Jose","A" => "Ana"];
Route::get('arreglo' , function(){
     echo "<pre>";
    var_dump($Estudiantes);
    echo "</pre>";  
    foreach ($Estudiantes as $I) {
        echo $I."<hr />";
    }
});
// Agregar elementos 
$Estudiantes["CR"]="Cristian";
var_dump($Estudiantes);
echo "<br>"; */

Route::get('Pais',function(){
    $Paises = [
        "Colombia"=>[
            "Capital"=>"Bogota",
            "Moneda"=>"Peso",
            "Poblacion"=>"51 Millones",
            "Ciudades principales"=>[
                "Medellin",
                "Barranquilla",
                "Cali"
            ]
        ],"Peru"=>[
            "Capital"=>"Lima",
            "Moneda"=>"Sol",
            "Poblacion"=>"32 Millones",
            "Ciudades principales"=>[
                "Trujillo",
                "Arequipa"
            ]
        ],"Paraguay"=>[
            "Capital"=>"Asuncion",
            "Moneda"=>"Guarany",
            "Poblacion"=>"7 Millones",
            "Ciudades principales"=>[
                "Luque"
                ]
        ],"Chile"=>[
            "Capital"=>"Santiago de Chile",
            "Moneda"=>"Peso",
            "Poblacion"=>"19 Millones"
        ],"Panama"=>[
            "Capital"=>"Ciudad de Panama",
            "Moneda"=>"Balboa",
            "Poblacion"=>"4 Millonessss"
        ]
    ];
    return view('Paises')->with("Paises",$Paises);
});