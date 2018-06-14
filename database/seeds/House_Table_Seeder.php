<?php

use Illuminate\Database\Seeder;

class House_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('houses') -> insert([
            'broker_id' => rand(1, 200),
            'type_id' => rand(1,200),
            'desc_id' => rand(1,200),
            'title' => str_random(20),
            'floor' => rand(1,30),
            'price' => rand(400,1000)
        ]);

    }
}
