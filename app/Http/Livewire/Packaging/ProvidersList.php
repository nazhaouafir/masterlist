<?php

namespace App\Http\Livewire\Packaging;

use App\Models\Provider;
use Livewire\Component;

class ProvidersList extends Component
{
    public $providers=[];

    public function mount(){
        $this->providers = Provider::with('packagings')->whereHas('packagings')->get();
    }
    public function render()
    {
        return view('livewire.packaging.providers-list');
    }
}
