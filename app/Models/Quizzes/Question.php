<?php

namespace App\Models\Quizzes;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends UuidModel
{
    use HasFactory;

    protected $fillable = [
        'quiz_id',
        'question_text',
        'image',
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quizzes::class, 'quiz_id');
    }


    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }
}
