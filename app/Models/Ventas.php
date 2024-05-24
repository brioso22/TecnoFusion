<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';
    protected $primaryKey = 'idVenta';
    public $timestamps = false;

    protected $fillable = [
        'Fecha',
        'Total',
        'usuarios_idusuarios',
        'empleados_idempleados',
        'empleados_Departamento_idDepartamento',
        'empleados_sucursales_idSucursales',
        'Equipos_idEquipo',
        'DetalleVentas_idDetalleVentas'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuarios_idusuarios', 'idUsuarios');
    }

    public function empleado()
    {
        return $this->belongsTo(Empleados::class, 'empleados_idempleados', 'idEmpleados');
    }

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function detalleVenta()
    {
        return $this->belongsTo(DetalleVentas::class, 'DetalleVentas_idDetalleVentas', 'idDetalleVentas');
    }
}
