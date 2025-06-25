<?php

namespace Database\Factories\Assignments;

use App\Models\Assignments\AssignmentFillBlank;
use App\Models\Assignments\AssignmentQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentFillBlankFactory extends Factory
{
    protected $model = AssignmentFillBlank::class;

    public function definition(): array
    {
        return [
            'blank_index' => $this->faker->randomNumber(),
            'correct_answers' => $this->faker->words(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'assignment_question_id' => AssignmentQuestion::factory(),
        ];
    }
}
