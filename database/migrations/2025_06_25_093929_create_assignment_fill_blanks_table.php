<?php

use App\Models\Assignments\AssignmentQuestion;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_fill_blanks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('assignment_question_id');
            $table->foreign('assignment_question_id')
                ->references('id')
                ->on('assignment_questions')
                ->onDelete('cascade');
            $table->smallInteger('blank_index');
            $table->json('correct_answers');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_fill_blanks');
    }
};
