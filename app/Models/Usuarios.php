<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuarios';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'password', // Cambiado de 'contraseña' a 'password'
        'external_id', // ID único proporcionado por Google
        'external_auth', // Método de autenticación externa, por ejemplo 'google'
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
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
