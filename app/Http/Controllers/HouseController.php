<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\HouseDesc;

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
        $title = Input::get('title');
        $floor = Input::get('floor');
        $price = Input::get('price');
        $content = Input::get('content');
        $type_id = Input::get('houseType');

        $desc_id = DB::table('house_descs') -> insertGetId(['content' => $content]);

        $house = House::create([
            'title' => $title,
            'floor' => $floor,
            'price' => $price,
            'type_id' => $type_id,
            'desc_id' => $desc_id,
            'broker_id' => session() -> get('userId')
            ]);

        return view('test', ['res' => $house]);
    }

    public function index(){
        $houseInfos = House::with(['broker','housetype','housedesc']) ->
        where('broker_id', session() -> get('userId')) -> limit(20) -> get();
        return view('homepage', ['username' => session() -> get('username'), 'houseInfos' => $houseInfos]);

    }

    public function show($id){
        $houseInfo = House::with('broker', 'housetype', 'housedesc') -> where(['broker_id' => session() -> get('userId'), 'id' => $id]) -> get();
        return view('houseinfo', ['res' => $houseInfo]);

    }

    public function createPage(){
        $houseTypes = DB::table('house_types') -> get();
        return view('createPage',['houseTypes' => $houseTypes]);
    }

}
