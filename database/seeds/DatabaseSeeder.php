<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(HeroesTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(HeroesRolesTableSeeder::class);
    }
}

class HeroesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('heroes')->delete();
        DB::table('heroes')->insert([
            'name'  => 'Abaddon',
            'slug'  => 'abaddon',
            'image' => 'abaddon.png'
        ]);
        DB::table('heroes')->insert([
            'name'  => 'Alchemist',
            'slug'  => 'alchemist',
            'image' => 'alchemist.png'
        ]);
    }
}

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->delete();
        DB::table('roles')->insert(['code' => 'carry']);
        DB::table('roles')->insert(['code' => 'disabler']);
        DB::table('roles')->insert(['code' => 'initiator']);
        DB::table('roles')->insert(['code' => 'jungler']);
        DB::table('roles')->insert(['code' => 'support']);
        DB::table('roles')->insert(['code' => 'durable']);
        DB::table('roles')->insert(['code' => 'nuker']);
        DB::table('roles')->insert(['code' => 'pusher']);
        DB::table('roles')->insert(['code' => 'escape']);
    }
}

class HeroesRolesTableSeeder extends  Seeder
{
    public function run()
    {
        DB::table('heroes_roles')->delete();
        DB::table('heroes_roles')->insert([
            'hero_id'        => '1',
            'role_id'        => '1',
            'predisposition' => '1'
        ]);
        DB::table('heroes_roles')->insert([
            'hero_id'        => '1',
            'role_id'        => '5',
            'predisposition' => '2'
        ]);
        DB::table('heroes_roles')->insert([
            'hero_id'        => '1',
            'role_id'        => '6',
            'predisposition' => '1'
        ]);
    }
}
