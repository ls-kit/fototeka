<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AuthorFormRequest extends FormRequest
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
        $rules = [
            'name' =>[
                'required',
                'string'
            ],
            'last_name' =>[
                'required',
                'string'
            ],
            'biography' =>[
                'required'
            ],
            'email' =>[
                'string'
            ],
            'image' =>[
                'nullable'
            ],
            'address' =>[
                'string'
            ],
            'age_from' =>[],
            'age_to' =>[],
        ];
        return $rules;
    }
}
