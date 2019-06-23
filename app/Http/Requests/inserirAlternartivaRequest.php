<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inserirAlternartivaRequest extends FormRequest
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
            'alternativas.2' => 'required',
            'alternativas.*' => 'min:1',
            'alternativaCorreta' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'alternativas.2.required' => 'É obrigatório o envio de ao menos 2 alternativas',
            'alternativas.*.min' => 'A alternativa deve possuir ao menos 1 caractere',
            'alternativaCorreta.required' => 'Deve ser indicada qual a alternativa correta',
        ];
    }


}
