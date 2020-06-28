<?php

use App\AntiBiogramDataBiotic;
use App\Pathogen;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        AntiBiogramDataBiotic::create([
            'name' => 'biotic',
            'anti_biotic_id' => '1',
        ]);
        /* AntiBiogramDataPathogen::create([
        'name' => 'pathogen',

        ]); */
        Pathogen::create([
            'description' => 'pathogen',
            'epidemiology' => 'test',
        ]);

    }
}