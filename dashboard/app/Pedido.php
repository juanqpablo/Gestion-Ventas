<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //id_pedido 	id_cliente 	cod_usuario 	fecha 	total 	estado
    protected $table='orders';
    protected $primaryKey='id_pedido';
    protected $fillable=['id_cliente','cod_usuario','fecha','total','estado'];
}
