<?php
/**
 * Created by PhpStorm.
 * User: daniiltitov
 * Date: 21.11.17
 * Time: 17:24
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $guarded = [];
    public function heroes()
    {
        return $this->hasMany('App\HeroesRoles', 'role_id');
    }
}