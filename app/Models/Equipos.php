<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipos extends Model
{
    use HasFactory;

    protected $table = 'equipos';
    protected $primaryKey = 'idEquipo';
    public $timestamps = false;

    protected $fillable = [
        'Precio',
        'modelo_idmodelo',
        'Marcas_idMarcas',
        'Descripcion',
        'Puntuacion',
        'Categorias_idCategorias'
    ];

    public function almacen()
    {
        return $this->hasOne(Almacenes::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function estado()
    {
        return $this->hasOne(Estados::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function donaciones()
    {
        return $this->hasMany(Donaciones::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function resenas()
    {
        return $this->hasMany(Resenas::class, 'Equipos_idEquipo', 'idEquipo');
    }
}
