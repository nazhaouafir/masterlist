<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderAccessory extends Model
{
    use HasFactory;
    protected $fillable=[
        'provider_id',
        'accessory_id',
        'price',
        'date_received',
    ];
}
