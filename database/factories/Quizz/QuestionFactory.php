<?php

namespace Database\Factories\Quizz;

use App\Models\Quizzes\Question;
use App\Models\Quizzes\Quizzes;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class QuestionFactory extends Factory
{
    protected $model = Question::class;

    public function definition(): array
    {
        return [
            'question_text' => $this->faker->text(),
            'image' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'quiz_id' => Quizzes::factory(),
        ];
    }
}
