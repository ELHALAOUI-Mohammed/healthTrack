<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Hospital extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name', 'address', 'latitude', 'longitude', 'contact_info',
    ];
}
