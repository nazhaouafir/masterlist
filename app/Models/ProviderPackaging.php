<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderPackaging extends Model
{
    use HasFactory;
    protected $fillable=[
        'provider_id',
        'packaging_id',
        'price',
        'date_received',
    ];
}
