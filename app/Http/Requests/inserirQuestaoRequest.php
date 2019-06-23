<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inserirQuestaoRequest extends FormRequest
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
            'questoes.1' => 'required',
            'questoes.*' => 'min:5',
        ];
    }

    public function messages()
    {
        return [
            'questoes.1.required' => 'É obrigatório o envio de ao menos 1 questão',
            'questoes.*.min' => 'A descrição da questão deve possuir ao menos 5 caracteres',
        ];
    }


}
