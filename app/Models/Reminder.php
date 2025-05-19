<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'treatment_id', 'reminder_time', 'reminder_type', 'status',
    ];

    public function treatment() {
        return $this->belongsTo(Treatment::class);
    }
}
