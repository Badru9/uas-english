<?php

use App\Models\Assignments\AssignmentQuestion;
use App\Models\Assignments\AssignmentSubmissions;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_answers', function (Blueprint $table) {
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
//            $table->foreignUuid(AssignmentSubmissions::class)->constrained('assignment_submissions');
//            $table->foreignUuid(AssignmentQuestion::class)->constrained('assignment_questions')->onDelete('cascade');
            $table->enum('type',[
                'essay', 'fill_blank'
            ]);
            $table->string('answer_text');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_answers');
    }
};
