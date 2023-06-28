<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = [
        'approved_by',
        'approved_date',
        'approved_status',
        'dose',
        'expiry_date',
        'name',
        'rejection_note',
        'registered_by',
        'type',
    ];
}
