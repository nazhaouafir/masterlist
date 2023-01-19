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
        'shape',
        'image_packaging'
    ];

   public  function accessories(){
    return $this->belongsToMany(Accessory::class,'packaging_acessories');
   }
   public  function labelings(){
    return $this->belongsToMany(Labeling::class,'packaging_labelings');
   }
   public  function providers(){
    return $this->belongsToMany(Provider::class, 'provider_packagings')->withPivot('price', 'date_received');
   }
   public  function operations(){
    return $this->belongsToMany(Operation::class, 'operation_packagings');
   }

}
