<?php

namespace Database\Seeders;

use App\Models\Listing;
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
         \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();
        // Listing::create(
        //     [
        //         'title' => 'Laravel',
        //         'tags' => 'Laravel Js',
        //         'company' => 'ShadowTech',
        //         'location' => 'Tamale',
        //         'email' => 'email@email.com',
        //         'website' => 'shadow.com',
        //         'description' => 'Laravel isjidjsihjdiuushdiushuhdwsuhw'
        //     ]
        // );
        // Listing::create(
        //     [
        //         'title' => 'Shadoww',
        //         'tags' => 'Laravel Js',
        //         'company' => 'ShadowTech',
        //         'location' => 'Tamale',
        //         'email' => 'email@email.com',
        //         'website' => 'shadow.com',
        //         'description' => 'Laravel isjidjsihjdiuushdiushuhdwsuhw'
        //     ]
        // );
    }
}
