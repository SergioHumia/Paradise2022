<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Viaje;

class ReservaFactory extends Factory
{
    

    public function definition()
    {
        return [
            'nombre'     => $this->faker->firstname(),
            'apellidos'  => $this->faker->lastname(),
            'viaje_id'   => Viaje::all()->random()->id,
        ];
    }
}
