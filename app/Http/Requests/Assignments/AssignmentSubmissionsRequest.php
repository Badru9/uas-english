<?php

namespace App\Http\Requests\Assignments;

use Illuminate\Foundation\Http\FormRequest;

class AssignmentSubmissionsRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'assignment_id' => ['required', 'exists:assignments'],
            'user_id' => ['required', 'exists:users'],
            'submitted_at' => ['required', 'date'],
            'is_graded' => ['boolean'],
            'score' => ['required', 'numeric'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
