<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{
    //
    protected $fillable = ['cedula', 'nombres', 'direccion','cumpleanos', 'telefono'];

   
}
