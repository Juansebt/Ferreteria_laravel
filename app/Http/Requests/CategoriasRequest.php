<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'nombreCategoria' => 'required|max:20',
                'codigoCategoria' => 'required|numeric|min:0|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El :attribute es requerido',
                'max' => 'El :attribute no puede ser mayor a :max',
                'min' => 'el :attribute no puede ser menor a :min',
                'numeric' => 'El : attribute debe ser numerico :numeric',
                'nombreCategoria.unique' => 'El nombre ya existe como categoria'
        ];
    }
}
