<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $primaryKey = 'idEstados';
    public $timestamps = false;

    protected $fillable = [
        'Nombre',
        'Descripcion'
    ];

    public function equipos()
    {
        return $this->hasMany(Equipos::class, 'Estados_idEstados', 'idEstados');
    }
}
