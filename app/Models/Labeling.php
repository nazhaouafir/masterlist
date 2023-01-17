<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Packaging;
use App\Models\Provider;
class Labeling extends Model
{
    use HasFactory;

    protected $fillable =[
        'type',
        'price'
    ];

    public function packaging(){
        return $this->hasMany(packaging::class);
    }
    public  function providers(){
        return $this->belongsToMany(Provider::class, 'provider_lebelings');
       }
}
