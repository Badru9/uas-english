<?php

namespace App\Models\Assignments;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentFillBlankAnswers extends Model
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'assignment_question_id',
        'assignment_submissions_id',
        'blank_index',
        'answer_text',
        'is_correct',
    ];

    public function assignmentQuestion(): BelongsTo
    {
        return $this->belongsTo(AssignmentQuestion::class);
    }

    public function assignmentSubmissions(): BelongsTo
    {
        return $this->belongsTo(AssignmentSubmissions::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'is_correct' => 'boolean',
        ];
    }
}
