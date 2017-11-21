<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesHeroesSinergyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes_heroes_sinergy', function (Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('first_comrade');
            $table->unsignedInteger('second_comrade');
        });

        Schema::table('heroes_heroes_sinergy', function ($table)
        {
            $table->foreign('first_comrade')->references('id')->on('heroes')->onDelete('cascade');
            $table->foreign('second_comrade')->references('id')->on('heroes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heroes_heroes_sinergy');
    }
}
