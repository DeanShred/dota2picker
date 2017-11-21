<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesHeroesVsTable extends Migration
{
    /**
     *
     *
     *
     */
    public function up()
    {
        Schema::create('heroes_heroes_vs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('good_id');
            $table->unsignedInteger('bad_id');
        });

        Schema::table('heroes_heroes_vs', function ($table) {
            $table->foreign('good_id')->references('id')->on('heroes')->onDelete('cascade');
            $table->foreign('bad_id')->references('id')->on('heroes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heroes_heroes_vs');
    }
}
