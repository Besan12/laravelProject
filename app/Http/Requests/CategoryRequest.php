<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => 'required|string',
            'courses' => 'required|numeric',
            'img' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'courses.required' => 'Courses is required',
            'courses.numeric' => 'Number of courses must be a numeric',
            'img.required' => 'You must upload an image',
        ];
    }
}
