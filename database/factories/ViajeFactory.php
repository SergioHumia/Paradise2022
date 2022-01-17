<?php

namespace Database\Factories;

use App\Models\Viaje;
use Illuminate\Database\Eloquent\Factories\Factory;

class ViajeFactory extends Factory
{
    

    public function definition()
    {
        $fecha=$this->faker->dateTimeBetween('+1 months', '+10 months');
        $fechaF=$fecha->format('d-m-Y');

        return [
            'lugar'  => $this->faker->state(),
            'precio' => $this->faker->randomNumber(3),
            'fecha' => $fechaF,
        ];
    }
}
