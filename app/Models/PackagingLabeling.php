<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackagingLabeling extends Model
{
    use HasFactory;
    protected $fillable=[
        'labeling_id',
        'packaging_id',
        
    ];
}
