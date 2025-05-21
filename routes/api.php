<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\MedicationStockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\HospitalController;


/*
| Public Routes
*/

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);


/*
| Protected Routes (Require Authentication)
*/

Route::middleware(['auth:sanctum', 'role:admin'])->get('/admin', function () {
    return 'Admin access granted';
});
Route::middleware(['auth:sanctum', 'role:medecin'])->get('/medecin', function () {
    return 'Medecin access granted';
});
Route::middleware(['auth:sanctum', 'role:patient'])->get('/patient', function () {
    return 'Patient access granted';
});


Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [AuthController::class, 'logout']);

    // Users
    Route::apiResource('users', UserController::class);
    // Route::get('/user', fn(Request $request) => $request->user());

    // Treatments & Reminders
    Route::apiResource('treatments', TreatmentController::class);
    Route::apiResource('reminders', ReminderController::class);



    // Appointments
    Route::apiResource('appointments', AppointmentController::class);

    // Prescriptions
    Route::apiResource('prescriptions', PrescriptionController::class);

    // Medical Records
    Route::apiResource('medical-records', MedicalRecordController::class);

    // Medication Stock
    Route::apiResource('medication-stocks', MedicationStockController::class);

    // Orders & Order Items
    Route::apiResource('orders', OrderController::class);
    Route::apiResource('order-items', OrderItemController::class);

    // Pharmacies & Hospitals
    Route::apiResource('pharmacies', PharmacyController::class);
    Route::apiResource('hospitals', HospitalController::class);
});
