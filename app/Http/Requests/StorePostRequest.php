<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return
            [
                'title' => 'required|min:5|max:100',
                'slug' => ['required', 'unique:posts'],
                'category' => 'required',
                'content' => 'required',
            ]
        ;
    }

    /* public function messages() //Funcion que permite cambiar el mensaje de error para los atributos
    {
        return [
            'title.required' => 'El :attribute es requerido'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Name',
        ];
    } */
}
