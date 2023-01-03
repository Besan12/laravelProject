<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'description' => 'required|string',
            'img' => 'required',
            'rate' => 'required|numeric',
            'price' => 'required|numeric',
            'students' => 'required|numeric',
            'teacher_id' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Name is required',
            'name.string' => 'Name must be a string',
            'description.required' => 'Description is required',
            'description.string' => 'Description must be a string',
            'img.required' => 'You must upload an image',
            'rate.required' => 'Rate is required',
            'rate.numeric' => 'Rate must be a numeric',
            'price.required' => 'Price is required',
            'price.numeric' => 'Price must be a numeric',
            'students.required' => 'Number of students is required',
            'students.numeric' => 'Number of students must be a numeric',
            'teacher_id.required' => 'Teacher id is required',
            'teacher_id.numeric' => 'Teacher id must be a numeric',
        ];
    }
}
