<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use App\Models\Viaje;
use App\Models\Realiza;
use App\Models\Reserva;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Cliente::factory()->count(200)->create();
        Viaje::factory()->count(15)->create();
        Realiza::factory()->count(300)->create();
        Reserva::factory()->count(400)->create();
    }
}
