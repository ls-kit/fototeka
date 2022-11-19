<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
//        $rules = [
//            'category_id'=>[
//
//            ],
//            'name' =>[
//                'required',
//                'string'
//            ],
//            'slug' =>[
//                'required',
//                'string'
//            ],
//            'description' =>[
//                'required'
//            ],
//            'image' =>[
//                'nullable',
//
//            ],
//            'meta_title' =>[
//                'required',
//                'string'
//            ],
//            'meta_description' =>[
//                'nullable',
//                'string'
//            ],
//            'status' =>[
//                'nullable'
//            ],
//        ];
//        return $rules;


        $rules = [
            'category_id'=>[

            ],
            'title' =>[
                'required',
            ],
            'author_id' =>[
                'required'
            ],
            'description' =>[
                'required'
            ],
            'image' =>[
                'nullable',
            ],
            'original_date' =>[
                'required'
            ],
            'digital_date' =>[
                'nullable'
            ],
            'physic_description' =>[
                'required',
                'string'
            ],
            'width' =>[
                'required',
                'integer'
            ],
            'height' =>[
                'required',
                'integer'
            ],
            'material' =>[
                'required',
                'string'
            ],
        ];
        return $rules;
    }
}
