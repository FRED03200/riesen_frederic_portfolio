<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableMyAchievements extends Model
{
    protected $table='tablemyachievements';

    protected $filable =[
        'title', 'date_creation', 'image', 'descriptive'

    ];
   
}
