<?php

namespace App\Models\Quizzes;

use App\Models\User;
use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quizzes extends UuidModel
{
    protected $fillable = [
        'title',
        'description',
        'created_by',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id');
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }
}
