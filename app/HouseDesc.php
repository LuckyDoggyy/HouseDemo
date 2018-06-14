<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HouseDesc extends Model
{
    //
    protected $fillable = [
        'content'
    ];

    public static function addNewDesc($content)
    {
        return
            \DB::table('house_descs')->insertGetId([
                'content' => $content
            ]);
    }
}
