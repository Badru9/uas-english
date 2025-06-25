<?php

namespace Database\Factories\Quizz;

use App\Models\Quizzes\Choice;
use App\Models\Quizzes\Question;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ChoiceFactory extends Factory
{
    protected $model = Choice::class;

    public function definition(): array
    {
        return [
            'option_text' => $this->faker->text(),
            'is_correct' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'question_id' => Question::factory(),
        ];
    }
}
