<?php

use Illuminate\Database\Seeder;

class Housedesc_Table_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('housedescs') -> insert([

            'content' => str_random(255)

        ]);
    }
}
