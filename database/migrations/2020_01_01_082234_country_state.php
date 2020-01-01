<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CountryState extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('countries', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->timestamps();

        });



        Schema::create('states', function (Blueprint $table) {

            $table->increments('id');

            $table->string('name');

            $table->integer('id_country')->unsigned();

           

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("states");

        Schema::drop("countries");
    }
}
