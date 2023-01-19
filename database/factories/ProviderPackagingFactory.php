<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderPackagingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'provider_id'=>$this->faker->numberBetween(1, 25),
            'packaging_id'=>$this->faker->numberBetween(1, 25),
            'price'=>$this->faker->numberBetween(1, 25),
            'date_received'=>$this->faker->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
