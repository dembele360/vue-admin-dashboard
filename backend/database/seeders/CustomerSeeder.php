<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Customer::factory()
            ->count(25)
            ->hasInvoices(25)
            ->create(25);

        Customer::factory()
            ->count(100)
            ->hasInvoices(4)
            ->create(3);


        Customer::factory()
            ->count(100)
            ->hasInvoices(4)
            ->create(3);


    }
}
