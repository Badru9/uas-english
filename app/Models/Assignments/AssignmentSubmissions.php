<?php

namespace App\Models\Assignments;

use App\Models\User;
use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssignmentSubmissions extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'assignment_id',
        'user_id',
        'submitted_at',
        'is_graded',
        'score',
    ];

    public function assignment(): BelongsTo
    {
        return $this->belongsTo(Assignment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'submitted_at' => 'timestamp',
            'is_graded' => 'boolean',
        ];
    }
}
