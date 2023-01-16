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
        'company_name',
        'contact_name',
        'adresse',
        'phone_1',
        'phone_2',
        'email',
    ];

    public  function packagings(){
        return $this->belongsToMany(Packaging::class, 'provider_packagings');
    }

    public  function labelings(){
        return $this->belongsToMany(Labeling::class, 'provider_lebelings');
    }
    
    public  function accessories(){
        return $this->belongsToMany(Accessory::class, 'provider_accessories');
    }
}
