<?php

namespace App\Http\Livewire\Provider;

use App\Models\Provider;
use LivewireUI\Modal\ModalComponent;

class Packagings extends ModalComponent
{

    public $provider;
    public function mount(Provider $provider){
        $this->provider = $provider;
    }
/**
 * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
 */
public static function modalMaxWidth(): string
{
    return 'sm';
}
    public function render()
    {
        return view('livewire.provider.packagings');
    }
 
        
}
