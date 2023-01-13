<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderLebeling extends Model
{
    use HasFactory;
    protected $fillable=[
        'provider_id',
        'labeling_id',
        'price',
        'date_received',
    ];
}
