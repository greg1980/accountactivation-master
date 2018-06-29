<?php

namespace App;
use App\user;
use Illuminate\Database\Eloquent\Model;

class Teller extends Model
{
    //
   public $table='tellers';


   protected $fillable = [
         'user_id',
         'name',
         'bank',
         'number',
         'tel',
         'year',
         'amount',
         'year',
   ];
   public function  user(){

   	return $this->belongsTo('App/user');
   }
}
