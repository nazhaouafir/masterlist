<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $fillable = [
        'operation_number'
    ];

    public  function packagings(){
        return $this->belongsToMany(Operation::class, 'operation_packagings');
       }
}
