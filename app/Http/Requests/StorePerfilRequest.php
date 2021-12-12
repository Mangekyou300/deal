<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerfilRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pf_pj'         => 'required',
            'nome_fantasia' => 'required',
            'cpf_cnpj'      => 'required|min:10|max:18',
            'dt_nascimento' => 'required|date',
            'cep'           => 'required|min:8|max:10',
            'logradouro'    => 'required',
            'numero'        => 'required',
            'bairro'        => 'required',
            'cidade'        => 'required',
            'uf'            => 'required'
        ];
    }
}

// 	avatar
