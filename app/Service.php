<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //

    protected $fillable = ['tipo_servicio', 'marcas', 'estado_tenis','abono', 'numero_order', 'referencia', 'estado_pedido', 'fecha_entrega'];
}
