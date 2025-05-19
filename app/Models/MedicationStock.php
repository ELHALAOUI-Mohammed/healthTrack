<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MedicationStock extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id', 'medication_name', 'quantity', 'alert_threshold',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
