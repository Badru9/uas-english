<?php

use App\Models\Assignments\Assignment;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('assignment_questions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid(Assignment::class)->constrained('assignments')->onDelete('cascade');
            $table->string('question_text');
            $table->enum('type',[
                'fill_black',
                'essay'
            ]);
            $table->longText('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('assignment_questions');
    }
};
