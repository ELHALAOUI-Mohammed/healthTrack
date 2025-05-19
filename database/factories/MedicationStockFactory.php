<?php

namespace Database\Factories;

use App\Models\MedicationStock;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicationStockFactory extends Factory {
    protected $model = MedicationStock::class;

    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'medication_name' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'expiry_date' => $this->faker->date(),
        ];
    }
}