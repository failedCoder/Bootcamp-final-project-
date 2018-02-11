<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:40|min:2',
            'email' => 'required|max:100|email',
            'message' => 'required|max:2000|min:5',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ovo polje je obavezno',
            'max' => 'Previše znakova',
            'min' => 'Premalo znakova',
            'email' => 'Morate unjeti email'
        ];
    }
}
