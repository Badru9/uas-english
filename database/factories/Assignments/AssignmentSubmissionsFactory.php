<?php

namespace Database\Factories\Assignments;

use App\Models\Assignments\Assignment;
use App\Models\Assignments\AssignmentSubmissions;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AssignmentSubmissionsFactory extends Factory
{
    protected $model = AssignmentSubmissions::class;

    public function definition(): array
    {
        return [
            'submitted_at' => Carbon::now(),
            'is_graded' => $this->faker->boolean(),
            'score' => $this->faker->randomFloat(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'assignment_id' => Assignment::factory(),
            'user_id' => User::factory(),
        ];
    }
}
