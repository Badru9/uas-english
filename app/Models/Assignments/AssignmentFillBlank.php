<?php

namespace App\Models\Assignments;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentFillBlank extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'assignment_question_id',
        'blank_index',
        'correct_answers',
    ];

    public function assignmentQuestion(): BelongsTo
    {
        return $this->belongsTo(AssignmentQuestion::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'correct_answers' => 'array',
        ];
    }
}
