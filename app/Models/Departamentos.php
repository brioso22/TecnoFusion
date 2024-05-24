<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    use HasFactory;

    protected $table = 'departamentos';
    protected $primaryKey = 'idDepartamentos';
    public $timestamps = false;

    protected $fillable = [
        'Departamentocol',
        'Nombre',
        'Descripcion',
        'ubicacion'
    ];

    public function empleados()
    {
        return $this->hasMany(Empleados::class, 'Departamento_idDepartamento', 'idDepartamentos');
    }
}
