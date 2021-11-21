<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $fillable = [
        'user_id','avatar', 'nome_fantasia', 'cpf_cnpj', 'dt_nascimento', 'telefone',
        'telefone2', 'cep', 'logradouro', 'numero', 'complemento', 'bairro',
        'cidade', 'sobre_mim', 'uf'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
