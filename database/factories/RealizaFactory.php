<?php

namespace Database\Factories;

use App\Models\Realiza;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\Viaje;

class RealizaFactory extends Factory
{
    

    public function definition()
    {
        return [
            'viaje_id'   =>Viaje::all()->random()->id,
            'cliente_id' =>Cliente::all()->random()->id,
        ];
    }
}
