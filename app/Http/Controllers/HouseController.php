<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    //
    protected $house;

    public function __construct()
    {
        \DB::listen(function($sql) {
            header('sql: '.$sql->sql);
            });

    }

    public function create(){


    }

    public function index(){



    }

    public function houseList(){
        $houseInfos = House::with(['broker','housetype','housedesc']) ->
                where('broker_id', session() -> get('userId')) -> limit(20) -> get();
        return view('homepage', ['username' => session() -> get('username'), 'houseInfos' => $houseInfos]);
    }


}
