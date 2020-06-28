<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntiBiogramDataPathogen extends Model
{
    protected $guarded = [];

    public function pathogen()
    {
        return $this->hasOne('App\Pathogen');
    }

    public function anti_biotics()
    {
        return $this->belongsToMany('App\AntiBiotics', 'anti_biogram_data_pathogen_anti_biotic')->withPivot('isolates_number', 'year')->withTimestamps();
    }

}