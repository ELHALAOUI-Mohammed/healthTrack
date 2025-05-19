<?php

namespace Database\Factories;

use App\Models\MedicalRecord;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalRecordFactory extends Factory {
    protected $model = MedicalRecord::class;

    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'description' => $this->faker->paragraph,
            'record_date' => $this->faker->date(),
        ];
    }
}
