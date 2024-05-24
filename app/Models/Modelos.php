<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelos extends Model
{
    use HasFactory;

    protected $table = 'modelos';
    protected $primaryKey = 'idModelo';
    public $timestamps = false;

    protected $fillable = [
        'modelo',
        'descripcion'
    ];

    public function equipos()
    {
        return $this->hasMany(Equipos::class, 'modelo_idmodelo', 'idModelo');
    }
}
