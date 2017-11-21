<?php

namespace App\Http\Controllers;

use App\Heroes;
use App\HeroesRoles;
use App\Roles;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    public function index()
    {
        $heroes = Heroes::all('*');
        $heroesRoles = HeroesRoles::all('*');
        foreach ($heroesRoles as $hero)
        {
            $role = Roles::where('id', $hero->role_id)->first();

            $hero->setCode($role->code);
        }
        $title = 'Heroes';
        return view('home')->withHeroes($heroes)->withTitle($title)->withRoles($heroesRoles);
    }

    public function show($slug)
    {
        $hero = Heroes::where('slug', $slug)->first();
        if (!$hero) {
            return redirect('/')->withErrors('Hero not found.');
        }
        return view('heroes.show')->withHero($hero);
    }

}
