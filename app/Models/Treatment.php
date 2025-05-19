<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Treatment extends Model
{
      use HasFactory;

    protected $fillable = [
        'user_id', 'medication_name', 'dosage', 'frequency', 'start_date', 'end_date', 'instructions',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function reminders() {
        return $this->hasMany(Reminder::class);
    }
}
