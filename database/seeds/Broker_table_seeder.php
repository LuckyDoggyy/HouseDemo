<?php

use Illuminate\Database\Seeder;

class Broker_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brokers') -> insert([
            'username' => str_random(20),
            'password' => str_random(20),
            'phone' => str_random(20)
        ]);

    }
}
