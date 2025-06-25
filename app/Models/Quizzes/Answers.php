<?php

namespace App\Models\Quizzes;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Answers extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'quiz_attempts_id',
        'question_id',
        'choice_id',
        'is_correct',
    ];

    public function quizAttempts(): BelongsTo
    {
        return $this->belongsTo(Quiz_attempts::class);
    }

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function choice(): BelongsTo
    {
        return $this->belongsTo(Choice::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'is_correct' => 'boolean',
        ];
    }
}
