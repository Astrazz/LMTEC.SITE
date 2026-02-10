<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','categoria','categoria_url','url','image','slide','descricao','description'];

    public function fotos()
    {
        return $this->hasMany("App\Models\Galeria",'servico_id','id');
    }

    public function Analytic()
    {
        return $this->hasMany("App\Models\Analytic",'servico_id','id');
    }
}
