<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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

    public function message()
    {
        return [
            'titulo.required'=>'Informe o título do telefone',
            'titulo.max'=>'Título deve conter no máximo 20 caracteres',
            'telefone.required'=>'Informe um telefone',
            'telefone.max'=>'Telefone deve conter no máximo 12 caracteres'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'=>'required|max:20',
            'telefone'=>'required|max:12'
        ];
    }
}
