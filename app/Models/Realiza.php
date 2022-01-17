<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realiza extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = ['id'];

    public function viaje()
    {
        return $this->belongsTo(Viaje::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
