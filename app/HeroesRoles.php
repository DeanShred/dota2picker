<?php
/**
 * Created by PhpStorm.
 * User: daniiltitov
 * Date: 21.11.17
 * Time: 17:26
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroesRoles extends Model
{
    protected $guarded = [];

    protected $roleCode = '';

    public function roles()
    {
        return $this->belongsTo('App\Roles', 'id');
    }

    public function heroes()
    {
        return $this->hasMany('App\Heroes', 'id');
    }

    public function getCode()
    {
        return $this->roleCode;
    }

    public function setCode($roleCode)
    {
        $this->roleCode = $roleCode;
    }
}