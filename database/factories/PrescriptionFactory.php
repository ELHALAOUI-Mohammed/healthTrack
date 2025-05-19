<?php

namespace Database\Factories;

use App\Models\Prescription;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrescriptionFactory extends Factory {
    protected $model = Prescription::class;

    public function definition(): array {
        return [
            'doctor_id' => User::factory(),
            'patient_id' => User::factory(),
            'medications' => $this->faker->text,
        ];
    }
}
