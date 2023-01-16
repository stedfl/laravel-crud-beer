<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
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
            'name' => 'required|min:3|max:150',
            'image' => 'required|max:255',
            'price' => 'required|decimal:2|max:150.00'
        ];
    }

    public function messages() {

        return [
            'name.required' => 'Il campo nome è obbligatorio',
            'name.max' => 'Il campo nome consente al massimo :max caratteri',
            'name.min' => 'Il campo nome richiede minimo :min caratteri',
            'image.required' => 'Il campo immagine è obbligatorio',
            'image.max' => 'Il campo immagine consente al massimo :max caratteri',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.decimal' => 'Il campo prezzo richiede due decimali',
            'price.max' => 'Il campo prezzo consente un numero non superiore a 150.00',
        ];

    }
}
