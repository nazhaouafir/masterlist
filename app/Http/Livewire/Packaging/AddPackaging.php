<?php

namespace App\Http\Livewire\Packaging;

use Livewire\Component;
use Livewire\WithFileUploads;

class AddPackaging extends Component
{
    use WithFileUploads;
    public $image_packaging;

    public function render()
    {
        return view('livewire.packaging.add-packaging');
    }
}
