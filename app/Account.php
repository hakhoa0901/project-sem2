<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public function product(){
        return $this->hasMany('App\Product', 'account_id', 'id');
    }
    public function order(){
        return $this->hasMany('App\Oder', 'created_by', 'id');
    }
}
