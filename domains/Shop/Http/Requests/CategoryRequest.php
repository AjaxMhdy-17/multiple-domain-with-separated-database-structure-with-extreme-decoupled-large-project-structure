<?php

namespace Domains\Shop\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'category_name' => 'required',
        ];
    }
}
