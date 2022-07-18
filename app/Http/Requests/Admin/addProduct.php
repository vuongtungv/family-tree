<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class addProduct extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'category_id' => 'required',
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
            'name.required' => __('Tên sản phẩm không được trống.'),
            'name.min' => __('Tên sản phẩm tối thiểu 3 ký tự.'),
            'name.max' => __('Tên sản phẩm không được vượt quá 255 ký tự.'),
            'category_id.required' => __('Danh mục không được trống.'),
        ];
    }
}
