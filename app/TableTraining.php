<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableTraining extends Model
{
   protected $table='tabletraining';

   protected $fillable = [
    'id_user', 'organized', 'contenue', 'expiration_date', 'start_date'

   ];

   
}
