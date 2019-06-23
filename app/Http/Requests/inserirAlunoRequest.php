<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inserirAlunoRequest extends FormRequest
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
            'nome' => 'required|regex:/[A-Z][a-z]* [A-Z][a-z]*/',
            'cpf' => 'required|digits:14',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome do aluno é obrigatório',
            'nome.regex' => 'Deve ser enviado o nome e sobrenome do aluno',
            'cpf.required' => 'CPF do aluno é obrigatório',
            'cpf.digits' => 'CPF do aluno deve ser enviado por completo'
        ];
    }
}
