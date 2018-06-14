<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseType extends Model
{
    //
    protected $fillable = [
        'room','hall','area','t_floor','build_year','addr','comm_name'
    ];

    public static function addNewType($room, $hall, $area, $t_floor, $build_year, $addr, $comm_name){
        return
            \DB::table('house_types') -> insertGetId([
            'room' => $room,
            'hall' => $hall,
            'area' => $area,
            't_floor' => $t_floor,
            'build_year' => $build_year,
            'addr' => $addr,
            'comm_name' => $comm_name
            ]);
    }

}
