<?php

namespace App\Http\Requests\Quizz;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'quiz_id' => ['required', 'exists:quizzes'],
            'question_text' => ['required'],
            'image' => ['nullable'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
