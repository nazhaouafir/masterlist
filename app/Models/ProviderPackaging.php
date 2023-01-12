<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProviderPackaging extends Model
{
    use HasFactory;
    protected $fillable=[
        'price',
        'date_received',
    ];
}
