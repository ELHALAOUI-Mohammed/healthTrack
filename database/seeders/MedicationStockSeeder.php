<?php

namespace Database\Seeders;

use App\Models\MedicationStock;
use Illuminate\Database\Seeder;

class MedicationStockSeeder extends Seeder
{
    public function run(): void
    {
        MedicationStock::factory()->count(10)->create();
    }
}
