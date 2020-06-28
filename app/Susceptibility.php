<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Susceptibility extends Model
{
    protected $guarded = [];

    public function anti_biogram_data_pathogens()
    {
        return $this->hasMany('App\AntiBiogramDataPathogen')->ordered();
    }
    public function anti_biogram_data_biotics()
    {
        return $this->hasMany('App\AntiBiogramDataBiotic')->ordered();
    }
    /* public function general()
{
return $this->hasMany('App\General')->ordered();
}
public function local()
{
return $this->hasMany('App\General')->ordered();
} */
}