<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    // protected redirectedRoute = 'posts.create';
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tittle' => 'required|min:3|max:50',
            'body' => 'required|min:10|max:100',
            'image' => 'required'
        ];
    }

    /**

     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'tittle.required' => 'El :attribute es obligatorio',
            'body.required' => 'El :attribute es obligatorio',
            'image.required'=>'La :attribute es obligatoria',

            'tittle.min' => 'Mínimo 3 caracteres',
            'body.min' => 'Mínimo 10 caracteres',

            'tittle.max' => 'Máximo 50 caracteres',
            'body.max' => 'Máximo 100 caracteres'
        ];

    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'tittle' => 'título',
            'body' => 'contenido',
            'image' => 'imagen'
        ];
    }
}
