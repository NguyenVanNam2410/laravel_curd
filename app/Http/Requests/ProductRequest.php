<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'   => 'required',
            'sale'   => 'required|integer',
            'price'   => 'required|integer',
            'category_id'  => 'required',
        ];

    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được phép bỏ trống',
            'sale.required' => 'sale sản phẩm không được phép bỏ trống',
            'price.required' => 'giá sản phẩm không được phép bỏ trống',
            'sale.integer'   => 'sale là số nguyên',
            'price'          => 'giá sản phẩm phải là số nguyên',
        ];
    }
}
