<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    protected $table = 'vagas';

    protected $fillable = ['user_post_id', 'titulo', 'dt_abertura', 'dt_fechamento', 'descricao', 'status', 'reported_at', 'report_description'];
}
