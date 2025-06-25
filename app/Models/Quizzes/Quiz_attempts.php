<?php

namespace App\Models\Quizzes;

use App\Models\User;
use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Quiz_attempts extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'quizzes_id',
        'user_id',
        'start_time',
        'end_time',
        'score',
        'is_submitted',
    ];

    public function quizzes(): BelongsTo
    {
        return $this->belongsTo(Quizzes::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'start_time' => 'timestamp',
            'end_time' => 'timestamp',
            'is_submitted' => 'boolean',
        ];
    }
}
