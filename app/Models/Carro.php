<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = [
        'marca',
        'modelo',
        'ano',
        'placa',
        'categoria',
        'preco',
        'categoria',
        'image'
    ];

    public function path() {
        return route('veiculos.show', $this);
    }
}
