<?php

namespace App\Http\Livewire\Provider;

use App\Models\Accessory;
use LivewireUI\Modal\ModalComponent;

class Accessories extends ModalComponent
{
    public $accessory;
    
    
    public function mount(Accessory $accessory){

        $this->accessory = $accessory;
    
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
        return view('livewire.provider.accessories');
    }
}
