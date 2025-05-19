<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory {
    protected $model = Appointment::class;

    public function definition(): array {
        return [
            'patient_id' => User::factory(),
            'doctor_id' => User::factory(),
            'appointment_time' => $this->faker->dateTime,
            'status' => 'scheduled',
        ];
    }
}