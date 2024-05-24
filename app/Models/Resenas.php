<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resenas extends Model
{
    use HasFactory;

    protected $table = 'resenas';
    protected $primaryKey = 'idResenas';
    public $timestamps = false;

    protected $fillable = [
        'Titulo',
        'Contenido',
        'Puntuacion',
        'usuarios_idusuarios',
        'Equipos_idEquipo'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuarios_idusuarios', 'idUsuarios');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }
}
