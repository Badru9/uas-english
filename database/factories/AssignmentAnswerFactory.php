<?php

namespace Database\Factories;

use App\Models\Assignments\AssignmentAnswer;
use App\Models\Assignments\AssignmentQuestion;
use App\Models\Assignments\AssignmentSubmissions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentAnswerFactory extends Factory
{
    protected $model = AssignmentAnswer::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->words(),
            'answer_text' => $this->faker->text(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'assignment_submissions_id' => AssignmentSubmissions::factory(),
            'assignment_question_id' => AssignmentQuestion::factory(),
        ];
    }
}
