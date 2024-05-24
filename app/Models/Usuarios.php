<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuarios';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'contraseña'
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'usuarios_idusuarios', 'idUsuarios');
    }

    public function reclamos()
    {
        return $this->hasMany(Reclamos::class, 'usuarios_idusuarios', 'idUsuarios');
    }

    public function resenas()
    {
        return $this->hasMany(Resenas::class, 'usuarios_idusuarios', 'idUsuarios');
    }
}
