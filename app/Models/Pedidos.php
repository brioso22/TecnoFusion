<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $primaryKey = 'idPedidos';
    public $timestamps = false;

    protected $fillable = [
        'fecha',
        'Dirreccion',
        'Venta_idVenta',
        'Venta_usuarios_idusuarios',
        'Venta_empleados_idempleados',
        'Venta_empleados_Departamento_idDepartamento',
        'Venta_empleados_sucursales_idsucursales',
        'Equipos_idEquipo'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }

    public function venta()
    {
        return $this->belongsTo(Ventas::class, 'Venta_idVenta', 'idVenta');
    }
}
