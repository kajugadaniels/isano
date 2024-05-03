<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
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
}
