<?php

use App\Models\Assignments\AssignmentQuestion;
use App\Models\Assignments\AssignmentSubmissions;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_fill_blank_answers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assignment_submission_id');
            $table->uuid('assignment_question_id');

            $table->foreign('assignment_submission_id')
                ->references('id')
                ->on('assignment_submissions');
            $table->foreign('assignment_question_id')
                ->references('id')
                ->on('assignment_questions')
                ->onDelete('cascade');
            $table->tinyInteger('blank_index');
            $table->string('answer_text');
            $table->boolean('is_correct');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_fill_blank_answers');
    }
};
