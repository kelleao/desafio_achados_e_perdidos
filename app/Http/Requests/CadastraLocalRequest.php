<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastraLocalRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome_local' => ['required', 'nullable' , 'min:3', 'max:255'],
            'endereco' => ['required', 'nullable', 'min:3', 'max:255'],
            'contato' => ['required', 'nullable', 'min:3', 'max:255'],
            'descricao' => ['required', 'max:255'],
            'user_id' => ['required']
        ];
    }
}
