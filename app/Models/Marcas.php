<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    use HasFactory;
    
    protected $table = 'marcas';
    protected $primaryKey = 'idMarcas';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    public function equipos()
    {
        return $this->hasMany(Equipos::class, 'Marcas_idMarcas', 'idMarcas');
    }
}
