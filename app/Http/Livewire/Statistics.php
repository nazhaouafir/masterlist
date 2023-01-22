<?php

namespace App\Http\Livewire;

use App\Models\Accessory;
use App\Models\Labeling;
use App\Models\Packaging;
use App\Models\ProviderAccessory;
use App\Models\ProviderLebeling;
use App\Models\ProviderPackaging;
use Livewire\Component;

class Statistics extends Component
{
    public $packagings;
    public $accessories;
    public $labelings;
    public $p_providers;
    public $a_providers;
    public $l_providers=[];
    public function mount(){
        $packagings = Packaging::with('accessories','labelings','providers','operations')->get();
        $this->packagings = $packagings->count();
        $accessories = Accessory::with('packagings','providers')->get();
        $this->accessories = $accessories->count();
        $labelings = Labeling::with('packagings','providers')->get();
        $this->l_providers = ProviderLebeling::distinct()->count('provider_id');
        $this->p_providers = ProviderPackaging::distinct()->count('provider_id');
        $this->a_providers = ProviderAccessory::distinct()->count('provider_id');
        $this->labelings = $labelings->count();
    }
    public function render()
    {
        return view('livewire.statistics');
    }
}
