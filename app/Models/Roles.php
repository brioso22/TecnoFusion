<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'idRoles';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Descripcion',
        'empleados_idempleados'
    ];

    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'empleados_idempleados', 'idEmpleados');
    }
}
