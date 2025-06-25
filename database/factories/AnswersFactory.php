<?php

namespace Database\Factories;

use App\Models\Quizzes\Answers;
use App\Models\Quizzes\Choice;
use App\Models\Quizzes\Question;
use App\Models\Quizzes\Quiz_attempts;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnswersFactory extends Factory
{
    protected $model = Answers::class;

    public function definition(): array
    {
        return [
            'is_correct' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'quiz_attempts_id' => Quiz_attempts::factory(),
            'question_id' => Question::factory(),
            'choice_id' => Choice::factory(),
        ];
    }
}
