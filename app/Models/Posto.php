<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    use HasFactory;

    public $fillable = [
        'cidade_id',
        'reservatorio',
        'latitude',
        'longitude'
    ];

    // Relacionamento com model Cidade
    public function cidade()
    {
        return $this->hasOne(Cidade::class);
    }
}
