<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'mrn',
        'name',
        'dob',
        'age',
        'gender',
        'marital_status',
        'occupation',
        'nationality',
        'id_number',
        'address',
        'city',
        'postal_code',
        'mobile_number_1',
        'mobile_number_2',
        'relative_name',
        'relative_id_number',
        'relationship',
        'relative_address',
        'relative_mobile_number_1',
        'relative_mobile_number_2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            $patient->mrn = 'patient-' . str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT); // Generate a unique MRN with 4-digit numbers
        });
    }
}
