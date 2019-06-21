<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InserirProvaRequest extends FormRequest
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
            'descricao'   => 'required|max:70',
            'data_inicio' => 'required|Date|after:today',
            'data_final'   => 'required|Date|after_or_equal:data_inicio',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'É obrigatório nomear sua prova',
            'descricao.max' => 'O tamanho máximo do nome da prova é de 70 caracteres',
            'data_inicio.required' => 'Data de inicio da prova é obrigatória',
            'data_inicio.after' => 'Data de inicio da prova deve ser igual ou maior que a data atual',
            'data_final.required' => 'Data final da prova é obrigatória',
            'data_final.after_or_equal' => 'Data final da prova deve ser igual ou maior que a data de inicio'
        ];
    }
}
