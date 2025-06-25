<?php

namespace App\Models\Assignments;

use App\Models\User;
use App\Models\UuidModel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Assignment extends UuidModel
{
    use HasUuids, HasFactory;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'deadline',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected function casts(): array
    {
        return [
            'id' => 'string',
            'deadline' => 'datetime',
        ];
    }
}
