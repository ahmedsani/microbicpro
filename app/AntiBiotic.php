<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AntiBiotic extends Model
{
    protected $guarded = [];

    public function anti_biogram_data_pathogens()
    {
        return $this->hasOne('App\AntiBiogramDataPathogen')->ordered();
    }

    public function drug_informations()
    {
        return $this->hasMany('App\DrugInformation')->ordered();
    }

    public function dosages()
    {
        return $this->hasMany('App\Dosage')->ordered();
    }

    public function spectrums()
    {
        return $this->hasMany('App\Spectrum')->ordered();
    }

    /*
public function anti_biogram_data_biotics()
{
return $this->belongsToMany('App\AntiBiogramDataBiotic', 'anti_biogram_data_biotic_pathogen')->ordered();
} */
}