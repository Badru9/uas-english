<?php

namespace App\Http\Requests\Assignments;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'user_id' => ['required', 'exists:users'],
            'deadline' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
