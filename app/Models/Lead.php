<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $fillable = [
        'data',
        'nome',
        'email',
        'telefone',
        'servico',
        'status',
        'anotacoes',
    ];
}
