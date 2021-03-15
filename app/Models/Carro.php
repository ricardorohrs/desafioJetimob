<?php

namespace App\Models;

use Carbon\Carbon;
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
        'descricao',
        'image',
        'portas',
        'motor',
        'cambio',
        'quilometragem',
        'combustivel',
        'cor',
    ];

    protected $casts = [
        'venda' => 'datetime:d/m/Y - H:i:s'
    ];

    public function getCreatedAtAttribute($value) {
        return Carbon::createFromTimestamp(strtotime($value))
            ->timezone('America/Sao_Paulo')
            ->toDateTimeString();
    }

    public function getUpdatedAtAttribute($value) {
        return Carbon::createFromTimestamp(strtotime($value))
            ->timezone('America/Sao_Paulo')
            ->toDateTimeString();
    }
}
