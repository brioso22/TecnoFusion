<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamos extends Model
{
    use HasFactory;

    protected $table = 'reclamos';
    protected $primaryKey = 'idReclamos';
    public $timestamps = false;

    protected $fillable = [
        'Descripcion',
        'Fecha',
        'Estado',
        'usuarios_idusuarios'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class, 'usuarios_idusuarios', 'idUsuarios');
    }

    public function respuestas()
    {
        return $this->hasMany(RespuestaReclamos::class, 'reclamos_idreclamos', 'idReclamos');
    }
}
