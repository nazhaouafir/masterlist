<?php

namespace App\Http\Livewire\Packaging;

use App\Models\Accessory;
use App\Models\Labeling;
use App\Models\Operation;
use App\Models\OperationPackaging;
use App\Models\Packaging;
use App\Models\PackagingAcessory;
use App\Models\PackagingLabeling;
use App\Models\Provider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPackaging extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $providers= [];
    public $operation_number;
    public $packaging_name, $packaging_shape, $packaging_type, $packaging_color, $packaging_volume, $p_volume, $p_provider, $p_price, $p_date, $image_packaging;
    public $accessory_name, $accessory_type, $accessory_color, $a_provider, $a_price, $a_date, $image_accessory;
    public  $labeling_type,  $l_provider, $l_price, $l_date, $image_labeling;
    public $same_provider=1;
    public $add_provider_packaging=0;
    public $add_provider_accessory=0;
    public $add_provider_labeling=0;
    public $p_company_name, $p_contact_name, $p_adresse, $p_phone_1, $p_phone_2, $p_email; 
    public $a_company_name, $a_contact_name, $a_adresse, $a_phone_1, $a_phone_2, $a_email;
    public $l_company_name, $l_contact_name, $l_adresse, $l_phone_1, $l_phone_2, $l_email;

    public function mount(){

        $this->providers = Provider::with('packagings','labelings','accessories')->get();
    }
    public function toggle_provider_packaging(){

        $this->add_provider_packaging= !$this->add_provider_packaging;
        $this->p_company_name='';
        $this->p_contact_name='';
        $this->p_adresse='';
        $this->p_phone_1='';
        $this->p_phone_2='';
        $this->p_email='';

    }
    public function updated(){
            if($this->same_provider == 1 && $this->p_provider){
                $this->a_provider = $this->p_provider;
            } 
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

    public function save_packaging_provider(){
        $this->validate([
            'p_company_name'=>'required',
            'p_contact_name'=>'required',
            'p_adresse'=>'required',
            'p_phone_1'=>'required',
            'p_phone_2'=>'required',
            'p_email'=>'required',
        ]);
        $provider = Provider::create([
            'company_name'=>$this->p_company_name,
            'contact_name'=>$this->p_contact_name,
            'adresse'=>$this->p_adresse,
            'phone_1'=>$this->p_phone_1,
            'phone_2'=>$this->p_phone_2,
            'email'=>$this->p_email,
        ]);

        if($provider){

            $this->toggle_provider_packaging();
            $this->providers = Provider::with('packagings','labelings','accessories')->get();
            $this->p_provider=  $provider->id;
            $this->alert('success', 'Provider Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
               ]);
               
        }
    }

    public function create_operation(){
        $operation = Operation::create([
            'operation_number'=> $this->operation_number
        ]);
        if($operation)
        return $operation;
    }

    public function create_packaging(){

        $packaging = Packaging::create([
            'name'=>$this->packaging_name,
            'type'=>$this->packaging_type,
            'volume'=>$this->packaging_volume,
            'color'=>$this->packaging_color,
            'price'=>$this->p_price,
            'image_packaging'=>$this->image_packaging? $this->image_packaging->store('packagings', 'public') : null,
        ]);
        $packaging->providers()
                  ->attach($packaging->id, 
                    ['price'=>$this->p_price, 
                     'date_received'=>$this->p_date]);

    }
    public function create_accessory(){

        $accessory = Accessory::create([
            'name'=>$this->accessory_name,
            'type'=>$this->accessory_type,
            'color'=>$this->accessory_color,
            'price'=>$this->p_price,
            'image_accessory'=>$this->image_accessory? $this->image_accessory->store('accessories', 'public') : null,
        ]);
        $accessory->providers()
                  ->attach($accessory->id, 
                    ['price'=>$this->p_price, 
                     'date_received'=>$this->p_date]);

    }
    public function create_labeling(){

        $labeling = Labeling::create([
            'type'=>$this->labeling_type,
            'price'=>$this->p_price,
            'image_labeling'=>$this->image_labeling? $this->image_labeling->store('labelings', 'public') : null,
        ]);
        $labeling->providers()
                  ->attach($labeling->id, 
                    ['price'=>$this->p_price, 
                     'date_received'=>$this->p_date]);

    }
    public function create_product(){
        
        $this->validate([
            'operation_number' =>'required',
            'packaging_name' => 'required',
            'packaging_shape'=>'required',
            'packaging_type'=>'required',
            'packaging_volume' => 'required',
            'packaging_color'=> 'required',
            'p_price'=>'required',
            'image_packaging'=> 'nullable|image|max:2048',

            'p_email'=> 'nullable|email',
            'p_date'=> 'nullable|date|before:today',
            'p_phone_1'=>'nullable',
            'p_phone_2'=>'nullable',
            'p_adresse'=>'nullable',

            'p_provider'=>'required',
            'p_volume'=>'required',
            'accessory_name' => 'required',
            'accessory_type'=>'required',
            'accessory_color'=> 'required',
            'a_price'=>'required',
            'image_accessory'=> 'nullable|image|max:2048',

            'a_email'=> 'nullable|email',
            'a_date'=> 'nullable|date',
            'a_phone_1'=>'nullable',
            'a_phone_2'=>'nullable',
            'a_adresse'=>'nullable',

            'labeling_type'=>'required',
            'l_price'=>'required',
            'image_labeling'=> 'nullable|image|max:2048',

            'l_email'=> 'nullable|email',
            'l_date'=> 'nullable|date',
            'l_phone_1'=>'nullable',
            'l_phone_2'=>'nullable',
            'l_adresse'=>'nullable',

            'l_provider'=>'required',
            
        ]);

        $operation = Operation::create([
            'operation_number'=> $this->operation_number
        ]);
        ///////////////////////

        $packaging = Packaging::create([
            'name'=>$this->packaging_name,
            'type'=>$this->packaging_type,
            'volume'=>$this->packaging_volume,
            'mode_volume'=>$this->p_volume,
            'packaging_shape'=>$this->packaging_shape,
            'color'=>$this->packaging_color,
            'price'=>$this->p_price,
            'image_packaging'=>$this->image_packaging? $this->image_packaging->store('packagings', 'public') : null,
        ]);

        $operation_packagings = OperationPackaging::create([
            'operation_id'=>$operation->id,
            'packaging_id'=>$packaging->id
        ]);
        

        $packaging->providers()
                  ->attach($packaging->id, 
                    ['price'=>$this->p_price, 
                     'date_received'=>$this->p_date]);
                 

                     ///////////////////////////

        $accessory = Accessory::create([
            'name'=>$this->accessory_name,
            'type'=>$this->accessory_type,
            'color'=>$this->accessory_color,
            'price'=>$this->a_price,
            'image_accessory'=>$this->image_accessory? $this->image_accessory->store('accessories', 'public') : null,
        ]);

        $packaging_accesssory = PackagingAcessory::create([
            'accessory_id'=>$accessory->id,
            'packaging_id'=>$packaging->id
        ]);

        $accessory->providers()
                    ->attach($accessory->id, 
                    ['price'=>$this->a_price, 
                        'date_received'=>$this->a_date]);
        ///////////////////////////////
        $labeling = Labeling::create([
            'type'=>$this->labeling_type,
            'price'=>$this->l_price,
            'image_labeling'=>$this->image_labeling? $this->image_labeling->store('labelings', 'public') : null,
        ]);
        $packaging_labeling = PackagingLabeling::create([
            'labeling_id'=>$labeling->id,
            'packaging_id'=>$packaging->id
        ]);
        $labeling->providers()
                  ->attach($labeling->id, 
                    ['price'=>$this->l_price, 
                     'date_received'=>$this->l_date]);

        ///////////////////////
        
        $this->alert('success', 'Provider Created !', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
           ]);
    }
    public function save_labeling_provider(){
        $this->validate([
            'l_company_name'=>'required',
            'l_contact_name'=>'required',
            'l_adresse'=>'required',
            'l_phone_1'=>'required',
            'l_phone_2'=>'required',
            'l_email'=>'required',
        ]);
        $provider = Provider::create([
            'company_name'=>$this->l_company_name,
            'contact_name'=>$this->l_contact_name,
            'adresse'=>$this->l_adresse,
            'phone_1'=>$this->l_phone_1,
            'phone_2'=>$this->l_phone_2,
            'email'=>$this->l_email,
        ]);

        if($provider){

            $this->toggle_provider_labeling();
            $this->providers = Provider::with('packagings','labelings','accessories')->get();
            $this->l_provider=  $provider->id;
            $this->alert('success', 'Product Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
               ]);
        }
    }
    public function save_accessory_provider(){

        $this->validate([
            'a_company_name'=>'required',
            'a_contact_name'=>'required',
            'a_adresse'=>'required',
            'a_phone_1'=>'required',
            'a_phone_2'=>'required',
            'a_email'=>'required',
        ]);
        $provider = Provider::create([
            'company_name'=>$this->a_company_name,
            'contact_name'=>$this->a_contact_name,
            'adresse'=>$this->a_adresse,
            'phone_1'=>$this->a_phone_1,
            'phone_2'=>$this->a_phone_2,
            'email'=>$this->a_email,
        ]);

        if($provider){

            $this->toggle_provider_accessory();
            $this->providers = Provider::with('packagings','labelings','accessories')->get();
            $this->a_provider=  $provider->id;
            $this->alert('success', 'Product Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
               ]);
               
        }
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
        return view('livewire.packaging.add-packaging')->layout('layouts.app');
    }
}
