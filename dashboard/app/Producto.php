<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //id_prod 	cod_product 	nombre 	categoria 	peso 	precio
    protected $table='products';
    protected $primaryKey='id_prod';
    protected $fillable=['cod_product','nombre','categoria','peso','precio','stock'];
}
