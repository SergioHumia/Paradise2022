<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function cliente()
    {
        return $this-> belongsTo(Cliente::class);
    }

    public function reserva()
    {
        return $this->hasMany(Reserva::class);
    }
}
