<?php

namespace App\Models\Assignments;

use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentQuestion extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'assignment_id',
        'question_text',
        'type',
        'image',
    ];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
        ];
    }
}
