<?php

namespace App\Http\Requests\Assignments;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentQuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'assignment_id' => ['required', 'exists:assignments'],
            'question_text' => ['required'],
            'type' => ['required'],
            'image' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
