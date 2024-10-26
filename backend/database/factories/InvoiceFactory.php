<?php

namespace Database\Factories;

use App\Models\Invoice; // Use singular form
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class; // Ensure the model property is correctly set

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'customer_id' => Customer::factory(), // Correct method call
            'amount' => $this->faker->numberBetween(1000, 2000000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeThisDecade(),
            'paid_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 years'),
            'state' => $this->faker->state(),
            'postal_code' => $this->faker->postcode(), 
        ];
    }
}
