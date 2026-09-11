<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajuste extends Model
{
    /** @use HasFactory<\Database\Factories\AjusteFactory> */
     protected  $table = 'ajustes';
    protected $fillable = [
        'nombre',
        'descripcion',
        'direccion',
        'telefono',
        'email',
        'divisa',
        'logo',
        'web',
        
    ];
    use HasFactory;
}
