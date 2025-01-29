<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
        return [
            'name' => 'required | min:3',
            'description' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Il campo "Nome del prodotto" è obbligatorio',
            'description.required' => 'Il campo "Descrizione del prodotto" è obbligatorio',
            'price.required' => 'Il campo "Prezzo del prodotto" è obbligatorio'

        ];
    }

}
