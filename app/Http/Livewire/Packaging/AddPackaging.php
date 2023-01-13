<?php

namespace App\Http\Livewire\Packaging;

use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPackaging extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $operation_number;
    public $packaging_name, $packaging_type, $packaging_color, $packaging_volume, $p_volume, $p_provider, $p_price, $p_date, $image_packaging;
    public $accessory_name, $accessory_type, $accessory_color, $a_provider, $a_price, $a_date, $image_accessory;
    public  $labeling_type,  $l_provider, $l_price, $l_date, $image_labeling;
    public $same_provider=1;
    public $add_provider_packaging=0;
    public $add_provider_accessory=0;
    public $add_provider_labeling=0;

    public $p_company_name, $p_contact_name, $p_adresse, $p_phone_1, $p_phone_2, $p_email; 
    public $a_company_name, $a_contact_name, $a_adresse, $a_phone_1, $a_phone_2, $a_email;
    public $l_company_name, $l_contact_name, $l_adresse, $l_phone_1, $l_phone_2, $l_email;

    public function toggle_provider_packaging(){

        $this->add_provider_packaging= !$this->add_provider_packaging;
        $this->p_company_name='';
        $this->p_contact_name='';
        $this->p_adresse='';
        $this->p_phone_1='';
        $this->p_phone_2='';
        $this->p_email='';

    }
    
    public function toggle_provider_accessory(){

        $this->add_provider_accessory= !$this->add_provider_accessory;
        $this->a_company_name='';
        $this->a_contact_name='';
        $this->a_adresse='';
        $this->a_phone_1='';
        $this->a_phone_2='';
        $this->a_email='';

    }

    public function save_provider(){
            
    }
    public function toggle_provider_labeling(){

        $this->add_provider_labeling= !$this->add_provider_labeling;
        $this->l_company_name='';
        $this->l_contact_name='';
        $this->l_adresse='';
        $this->l_phone_1='';
        $this->l_phone_2='';
        $this->l_email='';

    }
    // public function hello()
    // { 
    //      $this->alert('success', 'Hello!', [
    //         'position' => 'center',
    //         'timer' => 3000,
    //         'toast' => true,
    //        ]);
    // }

    public function render()
    {
        return view('livewire.packaging.add-packaging');
    }
}
