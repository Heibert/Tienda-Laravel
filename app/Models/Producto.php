<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //relacion de producto con marca
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
}
