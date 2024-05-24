<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespuestaReclamos extends Model
{
    use HasFactory;

    protected $table = 'respuesta_reclamos';
    protected $primaryKey = 'idRespuestaReclamos';
    public $timestamps = false;

    protected $fillable = [
        'Respuesta',
        'Fecha',
        'Reclamos_idReclamos'
    ];

    public function reclamo()
    {
        return $this->belongsTo(Reclamos::class, 'Reclamos_idReclamos', 'idReclamos');
    }
}
