<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    // Modificar convenciones de Laravel:   
    //Para indicar que la tabla del modelo no usará los campos created_at y updated_at
    protected $table = 'productos';
    public $timestamps = false;

    // cuando el id de la base  de datos cambia por otro nombre se agrega esta linea 
    public function getKeyName(){
        return "id";
    }
}
