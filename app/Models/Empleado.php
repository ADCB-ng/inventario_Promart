<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'fecha_nacimiento',
        'fecha_ingreso',
        'dni',
        'cargo',
        'area_id',
    ];
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function pedidos()
    {
        return $this->hasMany(PedidoProveedor::class);
    }
}
