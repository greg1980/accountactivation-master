<?php

namespace App;
use App\Role;
use App\Teller;
use App\Registration;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active','role_id','registration_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function userActivationCode(){


        return $this->hasOne(ActivationCode::class);

    }



    public function userIsActivated(){


        if($this->active){

            return true;

        }


        return false;

    }
    
    /*=============================================
    =            has one to many address          =
    =============================================*/
     public function registration(){


        return $this->hasOne('App\registration');
     }
    
    
    /*=====  End of Section comment block  ======*/


   /*=======================================
   =            belongs to many            =
   =======================================*/
   
      public function role(){
        

        return $this->belongsTo('App\Role');
      }
   
   /*=====  End of belongs to many  ======*/



 /*========================================
 =            Has many tellers            =
 ========================================*/
  public function teller(){

    return $this->hasMany('App\Teller');
  }
 
 
 /*=====  End of Has many tellers  ======*/
 
   
 public function isAdmin(){

    if ($this->role->name == "Admin") {

        return true;
    }
       return false;
 }

}
