<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoProveedor extends Model
{
    protected $table = 'pedido_proveedores';
    protected $fillable = [
        'fecha_pedido',
        'fecha_entrega',
        'cantidad',
        'estado_id',
        'proveedor_id',
        'producto_id',
        'empleado_id',
    ];
    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
