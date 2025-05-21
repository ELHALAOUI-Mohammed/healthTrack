<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
   use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'role', 'phone', 'address', 'date_of_birth', 'gender',
    ];

    protected $hidden = ['password'];

    public function treatments() {
        return $this->hasMany(Treatment::class);
    }

    public function reminders() {
        return $this->hasManyThrough(Reminder::class, Treatment::class);
    }

    public function appointmentsAsPatient() {
        return $this->hasMany(Appointment::class, 'patient_id');
    }

    public function appointmentsAsDoctor() {
        return $this->hasMany(Appointment::class, 'doctor_id');
    }

    public function prescriptionsGiven() {
        return $this->hasMany(Prescription::class, 'doctor_id');
    }

    public function prescriptionsReceived() {
        return $this->hasMany(Prescription::class, 'patient_id');
    }

    public function medicalRecords() {
        return $this->hasMany(MedicalRecord::class);
    }

    public function medicationStocks() {
        return $this->hasMany(MedicationStock::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
