<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswersRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'quiz_attempts_id' => ['required', 'exists:quiz_attempts'],
            'question_id' => ['required', 'exists:questions'],
            'choice_id' => ['required', 'exists:choices'],
            'is_correct' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
