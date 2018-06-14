<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBroker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('broker', function(Blueprint $table){

            $table -> engine = 'InnoDB';
            $table -> increments('id');
            $table -> string('username',20);
            $table -> string('password',20);
            $table -> string('phone', 20);
            $table -> timestamps();
            $table -> index('username');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('broker');
    }
}
