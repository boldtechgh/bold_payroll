<?php

namespace Database\Seeders;

use App\Models\PayeTax;
use App\Models\User;
use App\Models\Pension;
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
        PayeTax::create([
            'chargeable_income' => 402,
            'rate' => 0,
            'payable' => 0,
            'cummulative_income' => 402,
            'cummulative_payable' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        PayeTax::create([
            'chargeable_income' => 110,
            'rate' => 5,
            'payable' => 5.5,
            'cummulative_income' => 512,
            'cummulative_payable' => 5.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        PayeTax::create([
            'chargeable_income' => 130,
            'rate' => 10,
            'payable' => 13,
            'cummulative_income' => 642,
            'cummulative_payable' => 18.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        PayeTax::create([
            'chargeable_income' => 3000,
            'rate' => 17.5,
            'payable' => 525,
            'cummulative_income' => 3642,
            'cummulative_payable' => 543.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Pension::create([
            'pension_tier' => 'Tier 1',
            'percentage' => 13.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Pension::create([
            'pension_tier' => 'Tier 2',
            'percentage' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Pension::create([
            'pension_tier' => 'Tier 3',
            'percentage' => 16.5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::create([
            'name' => 'Administrator',
            'contact' => '0200000000',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'password' => '$2y$10$BW6qMyGtqWk6wwD..LdDwuMs/mFgttNWOPKA5sPrzyfHr.0BwMfW6',
            //administrator
            'user_type' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
