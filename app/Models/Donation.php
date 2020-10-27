<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'state',
        'date',
        'donor_name',
        'donation_details',
        'donation_type',
        'donation_amount',
        'source',
    ];
}
