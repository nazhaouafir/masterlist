<?php

namespace App\Http\Livewire\Packaging;

use App\Models\Packaging;
use App\Models\ProviderPackaging;
use Livewire\Component;
use Livewire\WithPagination;

class PackagingsList extends Component
{
    use WithPagination;
    public $search='';
    public $type='';
    public $color='';
    public $volume='';
    public $modevolume='';

    public function clear(){
        $this->search='';
        $this->type='';
        $this->color='';
        $this->volume='';
        $this->modevolume='';
    }
    public function minPrice($id){
        $provider_packagings = ProviderPackaging::where('packaging_id',$id)->get();
        
        return $provider_packagings->min('price');
        
    }
    public function maxPrice($id){
        $provider_packagings = ProviderPackaging::where('packaging_id',$id)->get();
        
        return $provider_packagings->max('price');
        
    }
    public function render()
    {
        return view('livewire.packaging.packagings-list',[
            'packagings'=>Packaging::search('name', $this->search)->type('type', $this->type)->color('color',$this->color)->volume('volume',$this->volume)->volume('mode_volume',$this->modevolume)->paginate(5),
        ])->layout('layouts.app');
    }
}
