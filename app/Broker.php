<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Broker extends Model
{
    //
    protected $fillable = [
        'username', 'password', 'phone'
    ];

    protected $hidden = [
        'password'
    ];

    public function show($username){

        $broker = DB::table('brokers') -> where('username', $username) -> get();

        return $broker;

    }

    public function create($username, $password, $phone){

        return DB::table('brokers') -> insertGetId(['username' => $username, 'password' => $password, 'phone' => $phone]);

    }


}
