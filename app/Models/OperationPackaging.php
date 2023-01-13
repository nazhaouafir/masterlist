<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperationPackaging extends Model
{
    use HasFactory;
    protected $fillable=[
        'operation_id',
        'packaging_id',
        
    ];
}
