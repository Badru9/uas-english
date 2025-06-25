<?php

namespace App\Models\Quizzes;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Choice extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'question_id',
        'option_text',
        'is_correct',
    ];

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'is_correct' => 'boolean',
        ];
    }
}
