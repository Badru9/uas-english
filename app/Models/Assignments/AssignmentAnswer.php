<?php

namespace App\Models\Assignments;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentAnswer extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'assignment_submissions_id',
        'assignment_question_id',
        'type',
        'answer_text',
    ];

    public function assignmentSubmissions(): BelongsTo
    {
        return $this->belongsTo(AssignmentSubmissions::class);
    }

    public function assignmentQuestion(): BelongsTo
    {
        return $this->belongsTo(AssignmentQuestion::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'type' => 'array',
        ];
    }
}
