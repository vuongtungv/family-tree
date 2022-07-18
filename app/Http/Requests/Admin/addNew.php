<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class addNew extends FormRequest
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
            'name' => 'required|min:5|max:255',
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
            'name.required' => __('Tiêu đề không được trống.'),
            'name.min' => __('Tiêu đề tối thiểu 5 ký tự.'),
            'name.max' => __('Tiêu đề không được vượt quá 255 ký tự.'),
            'category.required' => __("Chưa chọn danh mục"),
        ];
    }
}
