<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $primaryKey = 'idProveedores';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Contacto',
        'Direccion'
    ];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'Proveedores_idProveedores', 'idProveedores');
    }
}
