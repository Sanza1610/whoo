<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'txtName'            => 'required|unique:category,name'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required'            => 'Please Enter Category Name',
            'txtName.unique'              => 'This Category Name Is Exist.Please Enter Category Another'
        ];
    }
}
