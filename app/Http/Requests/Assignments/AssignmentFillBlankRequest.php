<?php

namespace App\Http\Requests\Assignments;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentFillBlankRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'assignment_question_id' => ['required', 'exists:assignment_questions'],
            'blank_index' => ['required', 'integer'],
            'correct_answers' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
