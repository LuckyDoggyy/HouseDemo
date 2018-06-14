<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHouse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('house', function(Blueprint $table){
            $table -> engine = 'InnoDB';
            $table -> increments('id');
            $table -> integer('broker_id');
            $table -> integer('type_id');
            $table -> integer('desc_id');
            $table -> string('title', 20);
            $table -> integer('floor');
            $table -> integer('price');
            $table -> timestamp('pub_time',  '') ->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table -> timestamps();
            $table -> index('price'  );
            $table -> index('pub_time');
            $table -> index('title');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house');
    }
}
