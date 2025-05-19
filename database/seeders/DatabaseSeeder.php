<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Order matters due to foreign key constraints
        $this->call([
            UserSeeder::class,
            PharmacySeeder::class,
            HospitalSeeder::class,
            TreatmentSeeder::class,
            ReminderSeeder::class,
            AppointmentSeeder::class,
            PrescriptionSeeder::class,
            MedicalRecordSeeder::class,
            MedicationStockSeeder::class,
            OrderSeeder::class,
            OrderItemSeeder::class,
        ]);
    }
}
