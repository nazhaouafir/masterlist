<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Packaging;
use App\Models\Labeling;
use App\Models\Accessory;
class Provider extends Model
{
    use HasFactory;
    protected $fillable=[
        'full_name',
        'code_provider',
        'adresse',
        'telephone',
        'email',
    ];

    public  function packagings(){
        return $this->belongsToMany(Packaging::class, 'provider_packagings');
    }
    public  function labelings(){
        return $this->belongsToMany(Labeling::class, 'provider_packagings');
    }
    public  function accessories(){
        return $this->belongsToMany(Accessory::class, 'provider_accessories');
    }
}
