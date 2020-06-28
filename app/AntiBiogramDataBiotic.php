<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntiBiogramDataBiotic extends Model
{
    protected $guarded = [];

    public function anti_biotic()
    {
        return $this->hasOne('App\AntiBiotic');
    }

    public function pathogens()
    {
        return $this->belongsToMany('App\Pathogen', 'anti_biogram_data_biotic_pathogen')->withPivot('isolates_number', 'year')->withTimestamps();
    }
}