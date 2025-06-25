<?php

use App\Models\Quizzes\Quizzes;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('quiz_attempts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(Quizzes::class)->constrained('quizzes')->onDelete('cascade');
            $table->foreignUuid(User::class)->constrained('users');
            $table->timestamp('start_time');
            $table->timestamp('end_time');
            $table->float('score');
            $table->boolean('is_submitted');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_attempts');
    }
};
