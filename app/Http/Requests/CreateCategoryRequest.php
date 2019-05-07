<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'title'=>[
                'required',
                'size:6',
                'max:255',
                'unique:categories'
            ]
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title khong duoc de trong',
            'title.size'=>'Title phai nhieu hon 6 ky tu',
            'title.max' => 'Title khong duoc nhieu hon 255 ky tu'
        ];
    }
}
