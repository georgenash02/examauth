<?php

namespace App\Http\Requests;

use App\Models\StudentProfile;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStudentProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('student_profile_create');
    }

    public function rules()
    {
        return [
            'student_name' => [
                'string',
                'required',
            ],
            'matric_number' => [
                'string',
                'required',
                'unique:student_profiles',
            ],
            'faculty_id' => [
                'required',
                'integer',
            ],
            'department_id' => [
                'required',
                'integer',
            ],
            'level' => [
                'required',
            ],
        ];
    }
}
