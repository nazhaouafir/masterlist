<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Accessory;
use App\Models\Labeling;
use App\Models\Provider; 
use App\Models\Operation;
class Packaging extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'type',
        'volume',
        'mode_volume',
        'color',
        'price',
        'image_packaging'
    ];

   public  function accessory(){
    return $this->hasMany(Accessory::class);
   }
   public  function labelings(){
    return $this->hasMany(Labeling::class);
   }
   public  function providers(){
    return $this->belongsToMany(Provider::class, 'provider_packagings');
   }
   public  function operations(){
    return $this->belongsToMany(Operation::class, 'operation_packagings');
   }

}
