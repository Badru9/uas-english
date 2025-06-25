<?php

namespace App\Http\Requests\Assignments;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentFillBlankAnswersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'assignment_question_id' => ['required', 'exists:assignment_questions'],
            'assignment_submissions_id' => ['required', 'exists:assignment_submissions'],
            'blank_index' => ['required', 'integer'],
            'answer_text' => ['required'],
            'is_correct' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
