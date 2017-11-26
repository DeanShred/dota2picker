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
    /** @var array $guarded */
    protected $guarded = [];

    /** @var string $code */
    protected $code = '';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hero()
    {
        return $this->belongsTo('App\Hero', 'id');
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param null|int $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function roles($id = null)
    {

        $roles = $id ? HeroesRoles::where('hero_id', $id)->get() : HeroesRoles::all('*');
        foreach ($roles as $hero)
        {
            $hero->setCode($hero->role->code);
            switch ($hero->predisposition) {
                case 0 :
                    break;
                case 1 :
                    $hero->predisposition = 33;
                    break;
                case 2 :
                    $hero->predisposition = 66;
                    break;
                case 3 :
                    $hero->predisposition = 100;
                    break;
            }
        }
        return $roles;
    }
}