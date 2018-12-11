<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

      /**
       * The database table used by the model.
       *
       * @var string
       */
      protected $table = 'usuarios';

      protected $fillable = ['token','idusuario','nome', 'user', 'email', 'senha'];
}
