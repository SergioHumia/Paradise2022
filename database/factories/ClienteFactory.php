<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    

    public function definition()
    {
        return [
            'nombre'       => $this->faker->name(),
            'apellidos'    => $this->faker->lastname(),
            'email'        => $this->faker->email(),
            'f_nacimiento' => $this->faker->date($format = 'd-m-Y', $max = '01-01-2005'),
            'telefono'     => $this->faker->phoneNumber()
        ];
    }
}
