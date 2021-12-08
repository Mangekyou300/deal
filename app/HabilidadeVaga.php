<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabilidadeVaga extends Model
{
    protected $table = 'habilidade_vagas';

    protected $fillable = ['habilidade_id', 'vaga_id'];
}
