<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;

    protected $table = 'detalle_ventas';
    protected $primaryKey = 'idDetalleVentas';
    public $timestamps = false;

    protected $fillable = [
        'Metodo_Pago'
    ];

    public function ventas()
    {
        return $this->hasMany(Ventas::class, 'DetalleVentas_idDetalleVentas', 'idDetalleVentas');
    }
}
