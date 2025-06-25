<?php

namespace App\Http\Requests\Quizz;

use Illuminate\Foundation\Http\FormRequest;

class ChoiceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'question_id' => ['required', 'exists:questions'],
            'option_text' => ['required'],
            'is_correct' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
