<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';

    protected $fillable = [
        'user_post_id', 'titulo', 'dt_abertura', 'dt_fechamento', 'descricao','tipo_vaga', 'status', 'reported_at', 'report_description'
    ];

    public function habilidades()
    {
        return $this->belongsToMany(Habilidade::class, 'habilidade_vagas', 'vaga_id', 'habilidade_id');
    }

    public function contratante()
    {
        return $this->belongsTo(User::class, 'user_post_id', 'id');
    }
}
