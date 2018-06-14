<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
    //
    protected $fillable = [
        'room','hall','area','t_floor','build_year','addr','comm_name'
    ];

}
