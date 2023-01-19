<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'company_name'=>$this->faker->company,
            'contact_name'=>$this->faker->name,
            'adresse'=>$this->faker->address,
            'phone_1'=>$this->faker->phoneNumber,
            'phone_2'=>$this->faker->phoneNumber,
            'email'=>$this->faker->companyEmail,
        ];
    }
}
