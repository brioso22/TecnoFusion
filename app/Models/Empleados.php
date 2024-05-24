<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    protected $table = 'empleados';
    protected $primaryKey = 'idEmpleados';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'apellido',
        'idDepartamento',
        'Departamento_idDepartamento',
        'Idsucursal',
        'sucursales_idSucursales'
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'empleados_idempleados', 'idEmpleados');
    }

    public function roles()
    {
        return $this->hasMany(Roles::class, 'empleados_idempleados', 'idEmpleados');
    }
}
