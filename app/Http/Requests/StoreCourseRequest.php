<?php

namespace App\Http\Requests;

use App\Models\Course;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCourseRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('course_create');
    }

    public function rules()
    {
        return [
            'course_title' => [
                'string',
                'required',
                'unique:courses',
            ],
            'course_code' => [
                'string',
                'required',
                'unique:courses',
            ],
            'course_lecturer_id' => [
                'required',
                'integer',
            ],
            'department_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
