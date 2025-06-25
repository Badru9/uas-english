<?php

namespace Database\Factories\Quizzes;

use App\Models\Quizzes\Quiz_attempts;
use App\Models\Quizzes\Quizzes;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Quiz_attemptsFactory extends Factory
{
    protected $model = Quiz_attempts::class;

    public function definition(): array
    {
        return [
            'start_time' => Carbon::now(),
            'end_time' => Carbon::now(),
            'score' => $this->faker->randomFloat(),
            'is_submitted' => $this->faker->boolean(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'quizzes_id' => Quizzes::factory(),
            'user_id' => User::factory(),
        ];
    }
}
