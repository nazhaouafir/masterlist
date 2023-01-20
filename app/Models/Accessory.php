<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Packaging;
use App\Models\Provider;
class Accessory extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'color',
        'type',
        'price'
    ];

    public function packagings(){
        return $this->belongsToMany(Packaging::class,'packaging_accessory_labelings')->withPivot('code');
    }
    public  function providers(){
        return $this->belongsToMany(Provider::class, 'provider_accessories')->withPivot('price','date_received');
       }

}
