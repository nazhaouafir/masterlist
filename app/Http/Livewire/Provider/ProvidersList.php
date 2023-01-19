<?php

namespace App\Http\Livewire\Provider;

use App\Models\Packaging;
use App\Models\Provider;
use LivewireUI\Modal\ModalComponent;

class ProvidersList extends ModalComponent
{
    public $packaging;
    
    
    public function mount(Packaging $packaging){

        $this->packaging = $packaging;
    
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
        return view('livewire.provider.providers-list');
    }
}
