<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Almacenes extends Model
{
    use HasFactory;

    protected $table = 'almacenes';
    protected $primaryKey = 'idAlmacen';
    public $timestamps = false;

    protected $fillable = [
        'cantidad',
        'precio',
        'modelo',
        'Equipos_idEquipo'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }
}
