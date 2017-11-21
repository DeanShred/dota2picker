<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeroesRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes_roles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('hero_id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('predisposition');
        });

        Schema::table('heroes_roles', function ($table) {
            $table->foreign('hero_id')->references('id')->on('heroes')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('heroes_roles');
    }
}
