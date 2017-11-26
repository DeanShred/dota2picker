<?php
/**
 * Created by PhpStorm.
 * User: daniiltitov
 * Date: 21.11.17
 * Time: 17:21
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $guarded = [];

    /**
     * @return mixed
     */
    public function comrades()
    {
        $sinergy = Sinergy::where('first_comrade', $this->id)
            ->orWhere('second_comrade', $this->id)
            ->get();

        $ids = [];

        foreach ($sinergy as $item) {
            $ids[] = ($item->first_comrade != $this->id) ?
                $item->first_comrade :
                $item->second_comrade;
        }

        return Hero::whereIn('id', $ids)->get();
    }

    /**
     * @return mixed
     */
    public function goodVs()
    {
        $items = Vs::where('good_id', $this->id)
            ->pluck('bad_id')
            ->toArray();

        return Hero::whereIn('id', $items)->get();
    }

    /**
     * @return mixed
     */
    public function badVs()
    {
        $items = Vs::where('bad_id', $this->id)
            ->pluck('good_id')
            ->toArray();

        return Hero::whereIn('id', $items)->get();
    }
}