<?php

namespace App\Http\Livewire\Accessories;

use Livewire\Component;

class AddAccessory extends Component
{
    public function render()
    {
        return view('livewire.accessories.add-accessory')->layout('layouts.app');
    }
}
