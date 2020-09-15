<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuestion extends FormRequest
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
          'value'=> ['required', 'unique:questions', 'min:5', 'ends_with:?']
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
            'value.required' => 'Please enter a question.',
            'value.unique' => 'This question already exists, find it in the questions page.',
            'value.min' => 'The question must be at least 5 caracters.',
            'value.ends_with' => 'The question must end with a ?'
        ];
    }

}
