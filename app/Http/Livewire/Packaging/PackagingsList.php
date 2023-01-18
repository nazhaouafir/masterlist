<?php

namespace App\Http\Livewire\Packaging;

use App\Models\Packaging;
use Livewire\Component;

class PackagingsList extends Component
{
    public $packagings=[];
    public function mount(){
        $this->packagings = Packaging::with('accessories','labelings','providers','operations')->get();
    }
    public function render()
    {
        return view('livewire.packaging.packagings-list')->layout('layouts.app');
    }
}
