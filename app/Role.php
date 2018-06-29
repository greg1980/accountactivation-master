<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $table='roles';
    protected $fillable = [
        'id', 'name',
    ];

    
}
