<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntesDepois extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'antes',
        'depois',
    ];
}
