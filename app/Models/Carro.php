<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

//    protected $fillable = ['marca', 'modelo', 'ano', 'categoria', 'preco'];

    public function path() {
        return route('veiculos.show', $this);
    }
}
