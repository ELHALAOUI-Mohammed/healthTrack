<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class MedicalRecord extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id', 'type', 'description', 'document_url',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
