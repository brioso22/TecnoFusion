<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparaciones extends Model
{
    use HasFactory;

    protected $table = 'reparaciones';
    protected $primaryKey = 'idReparaciones';
    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'Fecha',
        'Estado',
        'Equipos_idEquipo'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }
}
