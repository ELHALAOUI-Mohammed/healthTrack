<?php

namespace Database\Factories;

use App\Models\Reminder;
use App\Models\Treatment;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReminderFactory extends Factory {
    protected $model = Reminder::class;

    public function definition(): array {
        return [
            'treatment_id' => Treatment::factory(),
            'reminder_time' => $this->faker->dateTime,
            'status' => $this->faker->randomElement(['pending', 'done']),
        ];
    }
}