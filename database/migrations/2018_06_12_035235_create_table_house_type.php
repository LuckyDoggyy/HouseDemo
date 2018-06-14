<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHouseType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('house_type', function(Blueprint $table){

            $table -> engine = 'InnoDB';
            $table -> increments('id');
            $table -> integer('room');
            $table -> integer('hall');
            $table -> integer('area');
            $table -> integer('t_floor');
            $table -> integer('build_year');
            $table -> string('addr',50);
            $table -> string('comm_name', 20);
            $table -> index('room');
            $table -> index('hall');
            $table -> index('area');
            $table -> index('build_year') ->default(\DB::raw(1970));

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('house_type');
    }
}
