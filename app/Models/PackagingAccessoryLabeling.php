<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagingAccessoryLabeling extends Model
{
    use HasFactory;
    protected $fillable=[
        'accessory_id',
        'packaging_id',
        'labeling_id',
        'code',
    ];
}
