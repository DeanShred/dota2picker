<?php

namespace App\Http\Controllers;

use App\Hero;
use App\HeroesRoles;
use App\Role;
use Illuminate\Http\Request;

class HeroesController extends Controller
{
    /**
     * @return mixed
     */
    public function index()
    {
        $heroes = Hero::all('*');
        $heroesRoles = HeroesRoles::roles();
        $title = 'Heroes';
        return view('home')->withHeroes($heroes)->withTitle($title)->withRoles($heroesRoles);
    }

    /**
     * @param string $slug
     * @return $this
     */
    public function show($slug)
    {
        $hero = Hero::where('slug', $slug)->first();
        $roles = HeroesRoles::roles($hero->id);

        if (!$hero) {
            return redirect('/')->withErrors('Hero not found.');
        }
        return view('hero')->withHero($hero)->withRoles($roles)->withTitle($hero->name);
    }

}
