<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentAnswerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'assignment_submissions_id' => ['required', 'exists:assignment_submissions'],
            'assignment_question_id' => ['required', 'exists:assignment_questions'],
            'type' => ['required'],
            'answer_text' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
