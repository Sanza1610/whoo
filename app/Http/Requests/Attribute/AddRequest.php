<?php

namespace App\Http\Requests\Attribute;

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
            'txtName' => 'required|unique:attribute,name'
        ];
    }

    public function messages()
    {
        return [
            'txtName.required'  => 'Please Enter Attribute Name',
            'txtName.attribute' => 'This Attribute Name Is Exist.Please Enter Attribute Another'
        ];
    }
}
