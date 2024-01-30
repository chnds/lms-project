<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'empresa',
        'cargo',
        'interesses',
        'fonte',
        'status',
    ];

    protected $casts = [
        'data_criacao' => 'datetime',
        'ultima_atualizacao' => 'datetime',
    ];
}
