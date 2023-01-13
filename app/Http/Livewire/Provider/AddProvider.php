<?php

namespace App\Http\Livewire\Provider;

use LivewireUI\Modal\ModalComponent;

class AddProvider extends ModalComponent
{
    
    public function render()
    {
        return view('livewire.provider.add-provider');
    }

    public static function modalMaxWidth(): string
        {
            return 'xl';
        }
        public static function closeModalOnEscape(): bool
            {
                return false;
            }
            public static function closeModalOnClickAway(): bool
            {
                return false;
            }
}
