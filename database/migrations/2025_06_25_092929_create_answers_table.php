<?php

use App\Models\Quizzes\Choice;
use App\Models\Quizzes\Question;
use App\Models\Quizzes\Quiz_attempts;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(Quiz_attempts::class)->constrained('quiz_attempts');
            $table->foreignUuid(Question::class)->constrained('questions')->onDelete('cascade');
            $table->foreignUuid(Choice::class)->constrained('choices');
            $table->boolean('is_correct');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
