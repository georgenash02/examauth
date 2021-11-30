<?php

namespace App\Http\Requests;

use App\Models\Faculty;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateFacultyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('faculty_edit');
    }

    public function rules()
    {
        return [
            'falculty_name' => [
                'string',
                'required',
                'unique:faculties,falculty_name,' . request()->route('faculty')->id,
            ],
        ];
    }
}
