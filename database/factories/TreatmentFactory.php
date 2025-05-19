<?php

namespace Database\Factories;

use App\Models\Treatment;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class TreatmentFactory extends Factory {
    protected $model = Treatment::class;

    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'medication_name' => $this->faker->word,
            'dosage' => $this->faker->word,
            'frequency' => $this->faker->word,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'instructions' => $this->faker->sentence,
        ];
    }
}
