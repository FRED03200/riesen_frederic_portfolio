<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TableContactForm extends Model
{
    protected $table='tablecontactform';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'object', 'message'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
