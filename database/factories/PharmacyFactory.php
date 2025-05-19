<?php

namespace Database\Factories;

use App\Models\Pharmacy;

use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacyFactory extends Factory {
    protected $model = Pharmacy::class;

    public function definition(): array {
        return [
            'name' => $this->faker->company,
            'location' => $this->faker->address,
        ];
    }
}
