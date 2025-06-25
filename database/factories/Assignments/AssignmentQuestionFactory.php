<?php

namespace Database\Factories\Assignments;

use App\Models\Assignments\Assignment;
use App\Models\Assignments\AssignmentQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentQuestionFactory extends Factory
{
    protected $model = AssignmentQuestion::class;

    public function definition(): array
    {
        return [
            'question_text' => $this->faker->text(),
            'type' => $this->faker->word(),
            'image' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'assignment_id' => Assignment::factory(),
        ];
    }
}
