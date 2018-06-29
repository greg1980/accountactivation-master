<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
        // use Notifiable;
    //
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='Registrations';
    protected $fillable = [
        'user_id',
        'fname', 
        'year_of_call',
         'address' ,
          'lname', 
          'branch',
           'company',
            'position',
             'committee', 
             'addCommittee',

    ];

    public function user(){

        return $this->belogsTo('App\User');
    }
}
