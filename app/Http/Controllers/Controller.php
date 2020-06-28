<?php

namespace App\Http\Controllers;

use App\AntiBiogramDataBiotic;
use App\Pathogen;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function test()
    {
        $biotic = AntiBiogramDataBiotic::find(1)->pathogens()->syncWithoutDetaching([Pathogen::find(1)->id => ['year' => '2025', 'isolates_number' => '1']]);
        //return Pathogen::find(1)->;
        return AntiBiogramDataBiotic::find(1)->pathogens; //->pivot;

    }
}