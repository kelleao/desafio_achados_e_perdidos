<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioResquest extends FormRequest
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
            'nome' => ['required', 'nullable', 'min:3', 'max:225'],
            'email' => ['required', 'nullable', 'min:3', 'max:225'],
            'password' => ['required', 'nullable'],
            'password_confirmation' => ['required', 'nullable']
        ];
    }
}
