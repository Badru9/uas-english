<?php

namespace App\Http\Requests\Quizzes;

use Illuminate\Foundation\Http\FormRequest;

class Quiz_attemptsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'quizzes_id' => ['required', 'exists:quizzes'],
            'user_id' => ['required', 'exists:users'],
            'start_time' => ['required', 'date'],
            'end_time' => ['required', 'date'],
            'score' => ['required', 'numeric'],
            'is_submitted' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
