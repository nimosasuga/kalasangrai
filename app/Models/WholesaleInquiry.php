<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WholesaleInquiry extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_name',
        'phone',
        'email',
        'business_type',
        'monthly_volume',
        'preferred_blend',
        'needs_equipment_consultation',
        'notes',
        'status',
        'ip_address',
    ];

    protected $casts = [
        'needs_equipment_consultation' => 'boolean',
    ];
}
