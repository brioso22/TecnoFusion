<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donaciones extends Model
{
    use HasFactory;

    protected $table = 'donaciones';
    protected $primaryKey = 'idDonacion';
    public $timestamps = false;

    protected $fillable = [
        'Num_Equipos',
        'Donador',
        'Estado',
        'Equipos_idEquipo'
    ];

    public function equipo()
    {
        return $this->belongsTo(Equipos::class, 'Equipos_idEquipo', 'idEquipo');
    }
}
