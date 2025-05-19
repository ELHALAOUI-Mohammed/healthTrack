<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Prescription extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctor_id', 'patient_id', 'content',
    ];

    public function doctor() {
        return $this->belongsTo(User::class, 'doctor_id');
    }

    public function patient() {
        return $this->belongsTo(User::class, 'patient_id');
    }
}
