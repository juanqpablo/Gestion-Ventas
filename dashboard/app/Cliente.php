<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table='clients';
    protected $primaryKey='id';
    protected $fillable=['id_client','cod_vendedor','nombre','apellido','comuna','direccion','fono','email'];
}
