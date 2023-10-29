<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table = 'Products';
   protected $fillable = ['p_price','name','image','user_id'];
   protected $hidden =['created_at','updated_at'];
   public $timestamps = false;

    public function users(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
