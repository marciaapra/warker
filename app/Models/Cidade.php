<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    public $fillable = [
        'nome',
        'latitude',
        'longitude'
    ];

    // Relacionamento com model Posto
    public function postos()
    {
        return $this->hasMany(Posto::class);
    }
}
