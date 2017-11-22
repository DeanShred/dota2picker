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
            'image' => 'abaddon.png',
            'icon'  => 'abaddon_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Alchemist',
            'slug'  => 'alchemist',
            'image' => 'alchemist.png',
            'icon'  => 'alchemist_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Ancient Apparition',
            'slug'  => 'ancient_apparition',
            'image' => 'ancient_apparition.png',
            'icon'  => 'ancient_apparition_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Anti-Mage',
            'slug'  => 'anti-mage',
            'image' => 'anti-mage.png',
            'icon'  => 'anti-mage_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Arc Warden',
            'slug'  => 'arc_warden',
            'image' => 'arc_warden.png',
            'icon'  => 'arc_warden_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Axe',
            'slug'  => 'axe',
            'image' => 'axe.png',
            'icon'  => 'axe_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Bane',
            'slug'  => 'bane',
            'image' => 'bane.png',
            'icon'  => 'bane_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Batrider',
            'slug'  => 'batrider',
            'image' => 'batrider.png',
            'icon'  => 'batrider_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Beastmaster',
            'slug'  => 'beastmaster',
            'image' => 'beastmaster.png',
            'icon'  => 'beastmaster_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Bloodseeker',
            'slug'  => 'bloodseeker',
            'image' => 'bloodseeker.png',
            'icon'  => 'bloodseeker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Bounty Hunter',
            'slug'  => 'bounty_hunter',
            'image' => 'bounty_hunter.png',
            'icon'  => 'bounty_hunter_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Brewmaster',
            'slug'  => 'brewmaster',
            'image' => 'brewmaster.png',
            'icon'  => 'brewmaster_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Bristleback',
            'slug'  => 'bristleback',
            'image' => 'bristleback.png',
            'icon'  => 'bristleback_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Broodmother',
            'slug'  => 'broodmother',
            'image' => 'broodmother.png',
            'icon'  => 'broodmother_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Centaur Warrunner',
            'slug'  => 'centaur_warrunner',
            'image' => 'centaur_warrunner.png',
            'icon'  => 'centaur_warrunner_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Chaos Knight',
            'slug'  => 'chaos_knight',
            'image' => 'chaos_knight.png',
            'icon'  => 'chaos_knight_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Chen',
            'slug'  => 'chen',
            'image' => 'chen.png',
            'icon'  => 'chen_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Clinkz',
            'slug'  => 'clinkz',
            'image' => 'clinkz.png',
            'icon'  => 'clinkz_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Clockwerk',
            'slug'  => 'clockwerk',
            'image' => 'clockwerk.png',
            'icon'  => 'clockwerk_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Crystal Maiden',
            'slug'  => 'crystal_maiden',
            'image' => 'crystal_maiden.png',
            'icon'  => 'crystal_maiden_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Dark Seer',
            'slug'  => 'dark_seer',
            'image' => 'dark_seer.png',
            'icon'  => 'dark_seer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Dark Willow',
            'slug'  => 'dark_willow',
            'image' => 'dark_willow.png',
            'icon'  => 'dark_willow_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Dazzle',
            'slug'  => 'dazzle',
            'image' => 'dazzle.png',
            'icon'  => 'dazzle_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Death Prophet',
            'slug'  => 'death_prophet',
            'image' => 'death_prophet.png',
            'icon'  => 'death_prophet_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Disruptor',
            'slug'  => 'disruptor',
            'image' => 'disruptor.png',
            'icon'  => 'disruptor_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Doom',
            'slug'  => 'doom',
            'image' => 'doom.png',
            'icon'  => 'doom_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Dragon Knight',
            'slug'  => 'dragon_knight',
            'image' => 'dragon_knight.png',
            'icon'  => 'dragon_knight_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Drow Ranger',
            'slug'  => 'drow_ranger',
            'image' => 'drow_ranger.png',
            'icon'  => 'drow_ranger_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Earth Spirit',
            'slug'  => 'earth_spirit',
            'image' => 'earth_spirit.png',
            'icon'  => 'earth_spirit_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Earthshaker',
            'slug'  => 'earthshaker',
            'image' => 'earthshaker.png',
            'icon'  => 'earthshaker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Elder Titan',
            'slug'  => 'elder_titan',
            'image' => 'elder_titan.png',
            'icon'  => 'elder_titan_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Ember Spirit',
            'slug'  => 'ember_spirit',
            'image' => 'ember_spirit.png',
            'icon'  => 'ember_spirit_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Enchantress',
            'slug'  => 'enchantress',
            'image' => 'enchantress.png',
            'icon'  => 'enchantress_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Enigma',
            'slug'  => 'enigma',
            'image' => 'enigma.png',
            'icon'  => 'enigma_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Faceless Void',
            'slug'  => 'faceless_void',
            'image' => 'faceless_void.png',
            'icon'  => 'faceless_void_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Gyrocopter',
            'slug'  => 'gyrocopter',
            'image' => 'gyrocopter.png',
            'icon'  => 'gyrocopter_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Huskar',
            'slug'  => 'huskar',
            'image' => 'huskar.png',
            'icon'  => 'huskar_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Invoker',
            'slug'  => 'invoker',
            'image' => 'invoker.png',
            'icon'  => 'invoker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Io',
            'slug'  => 'io',
            'image' => 'io.png',
            'icon'  => 'io_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Jakiro',
            'slug'  => 'jakiro',
            'image' => 'jakiro.png',
            'icon'  => 'jakiro_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Juggernaut',
            'slug'  => 'juggernaut',
            'image' => 'juggernaut.png',
            'icon'  => 'juggernaut_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Keeper of the Light',
            'slug'  => 'keeper_of_the_light',
            'image' => 'keeper_of_the_light.png',
            'icon'  => 'keeper_of_the_light_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Kunkka',
            'slug'  => 'kunkka',
            'image' => 'kunkka.png',
            'icon'  => 'kunkka_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Legion Commander',
            'slug'  => 'legion_commander',
            'image' => 'legion_commander.png',
            'icon'  => 'legion_commander_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Leshrac',
            'slug'  => 'leshrac',
            'image' => 'leshrac.png',
            'icon'  => 'leshrac_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lich',
            'slug'  => 'lich',
            'image' => 'lich.png',
            'icon'  => 'lich_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lifestealer',
            'slug'  => 'lifestealer',
            'image' => 'lifestealer.png',
            'icon'  => 'lifestealer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lina',
            'slug'  => 'lina',
            'image' => 'lina.png',
            'icon'  => 'lina_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lion',
            'slug'  => 'lion',
            'image' => 'lion.png',
            'icon'  => 'lion_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lone Druid',
            'slug'  => 'lone_druid',
            'image' => 'lone_druid.png',
            'icon'  => 'lone_druid_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Luna',
            'slug'  => 'luna',
            'image' => 'luna.png',
            'icon'  => 'luna_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Lycan',
            'slug'  => 'lycan',
            'image' => 'lycan.png',
            'icon'  => 'lycan_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Magnus',
            'slug'  => 'magnus',
            'image' => 'magnus.png',
            'icon'  => 'magnus_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Medusa',
            'slug'  => 'medusa',
            'image' => 'medusa.png',
            'icon'  => 'medusa_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Meepo',
            'slug'  => 'meepo',
            'image' => 'meepo.png',
            'icon'  => 'meepo_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Mirana',
            'slug'  => 'mirana',
            'image' => 'mirana.png',
            'icon'  => 'mirana_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Monkey King',
            'slug'  => 'monkey_king',
            'image' => 'monkey_king.png',
            'icon'  => 'monkey_king_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Morphling',
            'slug'  => 'morphling',
            'image' => 'morphling.png',
            'icon'  => 'morphling_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Naga Siren',
            'slug'  => 'naga_siren',
            'image' => 'naga_siren.png',
            'icon'  => 'naga_siren_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Nature\'s Prophet',
            'slug'  => 'natures_prophet',
            'image' => 'natures_prophet.png',
            'icon'  => 'natures_prophet_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Necrophos',
            'slug'  => 'necrophos',
            'image' => 'necrophos.png',
            'icon'  => 'necrophos_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Night Stalker',
            'slug'  => 'night_stalker',
            'image' => 'night_stalker.png',
            'icon'  => 'night_stalker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Nyx Assassin',
            'slug'  => 'nyx_assassin',
            'image' => 'nyx_assassin.png',
            'icon'  => 'nyx_assassin_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Ogre Magi',
            'slug'  => 'ogre_magi',
            'image' => 'ogre_magi.png',
            'icon'  => 'ogre_magi_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Omniknight',
            'slug'  => 'omniknight',
            'image' => 'omniknight.png',
            'icon'  => 'omniknight_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Oracle',
            'slug'  => 'oracle',
            'image' => 'oracle.png',
            'icon'  => 'oracle_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Outworld Devourer',
            'slug'  => 'outworld_devourer',
            'image' => 'outworld_devourer.png',
            'icon'  => 'outworld_devourer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Pangolier',
            'slug'  => 'pangolier',
            'image' => 'pangolier.png',
            'icon'  => 'pangolier_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Phantom Assassin',
            'slug'  => 'phantom_assassin',
            'image' => 'phantom_assassin.png',
            'icon'  => 'phantom_assassin_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Phantom Lancer',
            'slug'  => 'phantom_lancer',
            'image' => 'phantom_lancer.png',
            'icon'  => 'phantom_lancer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Phoenix',
            'slug'  => 'phoenix',
            'image' => 'phoenix.png',
            'icon'  => 'phoenix_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Puck',
            'slug'  => 'puck',
            'image' => 'puck.png',
            'icon'  => 'puck_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Pudge',
            'slug'  => 'pudge',
            'image' => 'pudge.png',
            'icon'  => 'pudge_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Pugna',
            'slug'  => 'pugna',
            'image' => 'pugna.png',
            'icon'  => 'pugna_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Queen of Pain',
            'slug'  => 'queen_of_pain',
            'image' => 'queen_of_pain.png',
            'icon'  => 'queen_of_pain_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Razor',
            'slug'  => 'razor',
            'image' => 'razor.png',
            'icon'  => 'razor_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Riki',
            'slug'  => 'riki',
            'image' => 'riki.png',
            'icon'  => 'riki_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Rubick',
            'slug'  => 'rubick',
            'image' => 'rubick.png',
            'icon'  => 'rubick_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Sand King',
            'slug'  => 'sand_king',
            'image' => 'sand_king.png',
            'icon'  => 'sand_king_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Shadow Demon',
            'slug'  => 'shadow_demon',
            'image' => 'shadow_demon.png',
            'icon'  => 'shadow_demon_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Shadow Fiend',
            'slug'  => 'shadow_fiend',
            'image' => 'shadow_fiend.png',
            'icon'  => 'shadow_fiend_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Shadow Shaman',
            'slug'  => 'shadow_shaman',
            'image' => 'shadow_shaman.png',
            'icon'  => 'shadow_shaman_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Silencer',
            'slug'  => 'silencer',
            'image' => 'silencer.png',
            'icon'  => 'silencer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Skywrath Mage',
            'slug'  => 'skywrath_mage',
            'image' => 'skywrath_mage.png',
            'icon'  => 'skywrath_mage_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Slardar',
            'slug'  => 'slardar',
            'image' => 'slardar.png',
            'icon'  => 'slardar_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Slark',
            'slug'  => 'slark',
            'image' => 'slark.png',
            'icon'  => 'slark_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Sniper',
            'slug'  => 'sniper',
            'image' => 'sniper.png',
            'icon'  => 'sniper_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Spectre',
            'slug'  => 'spectre',
            'image' => 'spectre.png',
            'icon'  => 'spectre_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Spirit Breaker',
            'slug'  => 'spirit_breaker',
            'image' => 'spirit_breaker.png',
            'icon'  => 'spirit_breaker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Storm Spirit',
            'slug'  => 'storm_spirit',
            'image' => 'storm_spirit.png',
            'icon'  => 'storm_spirit_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Sven',
            'slug'  => 'sven',
            'image' => 'sven.png',
            'icon'  => 'sven_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Techies',
            'slug'  => 'techies',
            'image' => 'techies.png',
            'icon'  => 'techies_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Terrorblade',
            'slug'  => 'terrorblade',
            'image' => 'terrorblade.png',
            'icon'  => 'terrorblade_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Tidehunter',
            'slug'  => 'tidehunter',
            'image' => 'tidehunter.png',
            'icon'  => 'tidehunter_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Timbersaw',
            'slug'  => 'timbersaw',
            'image' => 'timbersaw.png',
            'icon'  => 'timbersaw_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Tinker',
            'slug'  => 'tinker',
            'image' => 'tinker.png',
            'icon'  => 'tinker_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Tiny',
            'slug'  => 'tiny',
            'image' => 'tiny.png',
            'icon'  => 'tiny_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Treant Protector',
            'slug'  => 'treant_protector',
            'image' => 'treant_protector.png',
            'icon'  => 'treant_protector_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Troll Warlord',
            'slug'  => 'troll_warlord',
            'image' => 'troll_warlord.png',
            'icon'  => 'troll_warlord_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Tusk',
            'slug'  => 'tusk',
            'image' => 'tusk.png',
            'icon'  => 'tusk_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Underlord',
            'slug'  => 'underlord',
            'image' => 'underlord.png',
            'icon'  => 'underlord_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Undying',
            'slug'  => 'undying',
            'image' => 'undying.png',
            'icon'  => 'undying_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Ursa',
            'slug'  => 'ursa',
            'image' => 'ursa.png',
            'icon'  => 'ursa_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Vengeful Spirit',
            'slug'  => 'vengeful_spirit',
            'image' => 'vengeful_spirit.png',
            'icon'  => 'vengeful_spirit_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Venomancer',
            'slug'  => 'venomancer',
            'image' => 'venomancer.png',
            'icon'  => 'venomancer_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Viper',
            'slug'  => 'viper',
            'image' => 'viper.png',
            'icon'  => 'viper_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Visage',
            'slug'  => 'visage',
            'image' => 'visage.png',
            'icon'  => 'visage_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Warlock',
            'slug'  => 'warlock',
            'image' => 'warlock.png',
            'icon'  => 'warlock_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Weaver',
            'slug'  => 'weaver',
            'image' => 'weaver.png',
            'icon'  => 'weaver_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Windranger',
            'slug'  => 'windranger',
            'image' => 'windranger.png',
            'icon'  => 'windranger_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Winter Wyvern',
            'slug'  => 'winter_wyvern',
            'image' => 'winter_wyvern.png',
            'icon'  => 'winter_wyvern_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Witch Doctor',
            'slug'  => 'witch_doctor',
            'image' => 'witch_doctor.png',
            'icon'  => 'witch_doctor_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Wraith King',
            'slug'  => 'wraith_king',
            'image' => 'wraith_king.png',
            'icon'  => 'wraith_king_icon.png',
        ]);

        DB::table('heroes')->insert([
            'name'  => 'Zeus',
            'slug'  => 'zeus',
            'image' => 'zeus.png',
            'icon'  => 'zeus_icon.png',
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
