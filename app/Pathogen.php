<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pathogen extends Model
{
    protected $guarded = [];
    /* public function subscription()
    {
    return $this->hasOne('App\Subscription');
    }
     */
    public function susceptibilities()
    {
        return $this->hasMany('App\Susceptibility')->ordered();
    }

    public function precausions()
    {
        return $this->hasMany('App\Precausion')->ordered();
    }
    public function diseases()
    {
        return $this->hasMany('App\Disease')->ordered();
    }
}