<?php

namespace App\Http\Livewire\Labelings;

use App\Models\Provider;
use Livewire\Component;

class ProvidersList extends Component
{
    public $providers=[];

    public function mount(){
        $this->providers = Provider::with('labelings')->whereHas('labelings')->get();
    }

    public function render()
    {
        return view('livewire.labelings.providers-list');
    }
}
