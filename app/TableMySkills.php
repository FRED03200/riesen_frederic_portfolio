<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableMySkills extends Model
{
    protected $table='tablemyskills';

    

    protected $fillable =[

       'id-user', 'listecategory'

    ]; 
   
}
