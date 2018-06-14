<?php

use Illuminate\Database\Seeder;

class Housetype_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('housetypes') -> insert([
            'room' => rand(1,4),
            'hall' => rand(1,2),
            'area' => rand(30,150),
            't_floor' => rand(5,30),
            'build_year' => rand(1970,2018),
            'addr' => str_random(50),
            'comm_name' => str_random(20)
        ]);
    }
}
