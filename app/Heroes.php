<?php
/**
 * Created by PhpStorm.
 * User: daniiltitov
 * Date: 21.11.17
 * Time: 17:21
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Heroes extends Model
{
    protected $guarded = [];
    public function roles()
    {
        return $this->hasMany('App\HeroesRoles', 'hero_id');
    }
}