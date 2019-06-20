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
            'nome' => 'required|string',
            'email' => 'required|unique:professores,email',
            'senha' => 'required'
        ];
    }

    public function messages()
    {
        return [
          'nome.required' => 'Nome é obrigatório',
          'email.required' => 'Email é obrigatório',
          'email.unique' => 'Email já cadastrado',
          'senha.required' => 'Senha é obrigatória'
        ];
    }
}
