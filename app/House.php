<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    //
    protected $fillable = [
        'broker_id','type_id','desc_id','title','floor','price','pub_time'
    ];

    public function broker(){

        return $this -> belongsTo('App\Broker', 'broker_id', 'id');

    }

    public function housetype(){

        return $this -> belongsTo('App\HouseType', 'type_id', 'id');

    }

    public function housedesc(){

        return $this -> hasOne('App\HouseDesc', 'id', 'desc_id');

    }



}
