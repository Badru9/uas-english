<?php

use App\Models\Assignments\Assignment;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_submissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(Assignment::class)->constrained('assignments')->onDelete('cascade');
            $table->foreignUuid(User::class)->constrained('users');
            $table->timestamp('submitted_at');
            $table->boolean('is_graded');
            $table->float('score');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_submissions');
    }
};
