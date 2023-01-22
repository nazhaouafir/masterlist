<?php

namespace App\Http\Livewire\Accessories;

use App\Models\Provider;
use Livewire\Component;

class ProvidersList extends Component
{
    public $providers=[];

    public function mount(){
        $this->providers = Provider::with('accessories')->whereHas('accessories')->get();
    }

    public function render()
    {
        return view('livewire.accessories.providers-list');
    }
}
