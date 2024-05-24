<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    protected $table = 'categorias';
    protected $primaryKey = 'idCategorias';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
    
    public function equipos()
    {
        return $this->hasMany(Equipos::class, 'Categorias_idCategorias', 'idCategorias');
    }
}
