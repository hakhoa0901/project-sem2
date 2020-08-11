<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function account(){
        return $this->belongsTo('App\Account', 'created_by', 'id');
    }
    public  function oderDetail(){
        return $this->hasOne('App\OrderDetail','order_id','id');
    }
}
