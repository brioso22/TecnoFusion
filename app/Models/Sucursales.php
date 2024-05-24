<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursales extends Model
{
    use HasFactory;

    protected $table = 'sucursales';
    protected $primaryKey = 'idSucursales';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'ubicacion',
        'codigo'
    ];

    public function empleados()
    {
        return $this->hasMany(Empleados::class, 'sucursales_idSucursales', 'idSucursales');
    }
}
