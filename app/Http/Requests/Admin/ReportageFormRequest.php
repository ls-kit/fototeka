<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ReportageFormRequest extends FormRequest
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
            'name.en' =>[
                'required',
                'string',
                'max:200'
            ],
            'name.al' =>[
                'required',
                'string',
                'max:200'
            ],
            'description.en' =>[
                'required'
            ],
            'description.al' =>[
                'required'
            ],
            'year' =>[
                'required'
            ],
        ];

        return $rules;
    }
}
