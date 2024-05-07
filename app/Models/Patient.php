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
        'nationality',
        'id_number',
        'province',
        'district',
        'sector',
        'cell',
        'village',
        'mobile_number',
        'relative_name',
        'relative_id_number',
        'relationship',
        'relative_province',
        'relative_district',
        'relative_sector',
        'relative_cell',
        'relative_village',
        'relative_mobile_number',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($patient) {
            $patient->mrn = 'PTT-' . str_pad(rand(1, 999999999), 9, '0', STR_PAD_LEFT); // Generate a unique MRN with 4-digit numbers
        });
    }
}
