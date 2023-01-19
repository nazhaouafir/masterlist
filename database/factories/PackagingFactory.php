<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Packaging;
class PackagingFactory extends Factory
{

    protected $model = Packaging::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Bottle', 'Jar','Pots','Jug','Poches']),
            'type'=>$this->faker->randomElement(['Glass', 'Plastic','Metallic']),
            'volume'=>$this->faker->randomElement(['30', '50','100','120']),
            'mode_volume'=>$this->faker->randomElement(['ml', 'L','G','Kg']),
            'color'=>$this->faker->safeColorName(),
            'price'=>$this->faker->numberBetween(0, 100),
        ];
    }
}
