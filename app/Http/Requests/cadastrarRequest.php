<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cadastrarRequest extends FormRequest
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
            'email' => 'required|unique:professores,email',
            'senha' => 'required|min:5'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.regex' => 'Deve ser enviado o nome e sobrenome do profesor',
            'email.required' => 'Email é obrigatório',
            'email.unique' => 'Email já cadastrado',
            'senha.required' => 'Senha é obrigatória',
            'senha.min' => 'Senha deve possuir ao menos 5 caracteres',
        ];
    }
}
