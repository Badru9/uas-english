<?php

namespace Database\Factories\Assignments;

use App\Models\Assignments\AssignmentFillBlankAnswers;
use App\Models\Assignments\AssignmentQuestion;
use App\Models\Assignments\AssignmentSubmissions;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentFillBlankAnswersFactory extends Factory
{
    protected $model = AssignmentFillBlankAnswers::class;

    public function definition(): array
    {
        return [
            'blank_index' => $this->faker->randomNumber(),
            'answer_text' => $this->faker->text(),
            'is_correct' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'assignment_question_id' => AssignmentQuestion::factory(),
            'assignment_submissions_id' => AssignmentSubmissions::factory(),
        ];
    }
}
