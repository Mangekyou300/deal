<?php

namespace App\Http\Requests;

use App\Rules\GteDtAbertura;
use App\Rules\GteToday;
use Illuminate\Foundation\Http\FormRequest;

class StoreVagaRequest extends FormRequest
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
            'titulo'         => 'required',
            'descricao'      => 'required',
            'tipo_vaga'      => 'required',
            'dt_abertura'    => ['required', 'date', new GteToday],
            'dt_fechamento'  => ['required', 'date', new GteDtAbertura($this->dt_abertura)]
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'titulo.required' => 'kekekekeke'
    //     ];
    // }
}
