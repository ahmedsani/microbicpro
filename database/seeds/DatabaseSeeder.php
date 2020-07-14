<?php

use App\AntiBiogramDataBiotic;
use App\Pathogen;
use App\User;
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

        User::create([
            'first_name' => 'Abubakar',
            'last_name' => 'Lawal',
            'email' => 'abula3003@gmail.com',
            'password' => 'abula112',
        ]);

    }
}