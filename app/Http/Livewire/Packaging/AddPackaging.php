<?php

namespace App\Http\Livewire\Packaging;

use App\Models\Accessory;
use App\Models\Labeling;
use App\Models\Operation;
use App\Models\OperationPackaging;
use App\Models\Packaging;
use App\Models\PackagingAccessoryLabeling;
use App\Models\PackagingAcessory;
use App\Models\PackagingLabeling;
use App\Models\Provider;
use App\Models\ProviderAccessory;
use App\Models\ProviderLebeling;
use App\Models\ProviderPackaging;
use Livewire\Component;
use Livewire\WithFileUploads;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddPackaging extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $providers = [];
    public $operation_number;
    public $packaging_name, $packaging_shape, $packaging_type, $packaging_color, $packaging_volume, $p_volume, $p_provider, $p_price, $p_date, $image_packaging;
    public $accessory_name, $accessory_type, $accessory_color, $a_provider, $a_price, $a_date, $image_accessory;
    public  $labeling_type,  $l_provider, $l_price, $l_date, $image_labeling;
    public $same_provider = 1;
    public $add_provider_packaging = 0;
    public $add_provider_accessory = 0;
    public $add_provider_labeling = 0;
    public $p_company_name, $p_contact_name, $p_adresse, $p_phone_1, $p_phone_2, $p_email;
    public $a_company_name, $a_contact_name, $a_adresse, $a_phone_1, $a_phone_2, $a_email;
    public $l_company_name, $l_contact_name, $l_adresse, $l_phone_1, $l_phone_2, $l_email;
    public $codification = '';
    public function mount()
    {

        $this->providers = Provider::with('packagings', 'labelings', 'accessories')->get();
    }
    public function toggle_provider_packaging()
    {

        $this->add_provider_packaging = !$this->add_provider_packaging;
        $this->p_company_name = '';
        $this->p_contact_name = '';
        $this->p_adresse = '';
        $this->p_phone_1 = '';
        $this->p_phone_2 = '';
        $this->p_email = '';
    }
    public function updated()
    {
        if ($this->same_provider == 1 && $this->p_provider) {
            $this->a_provider = $this->p_provider;
        }
    }
    public function toggle_provider_accessory()
    {

        $this->add_provider_accessory = !$this->add_provider_accessory;
        $this->a_company_name = '';
        $this->a_contact_name = '';
        $this->a_adresse = '';
        $this->a_phone_1 = '';
        $this->a_phone_2 = '';
        $this->a_email = '';
    }

    public function save_packaging_provider()
    {
        $this->validate([
            'p_company_name' => 'required',
            'p_contact_name' => 'required',
            'p_adresse' => 'required',
            'p_phone_1' => 'required',
            'p_phone_2' => 'required',
            'p_email' => 'required',
        ]);
        $provider = Provider::create([
            'company_name' => $this->p_company_name,
            'contact_name' => $this->p_contact_name,
            'adresse' => $this->p_adresse,
            'phone_1' => $this->p_phone_1,
            'phone_2' => $this->p_phone_2,
            'email' => $this->p_email,
        ]);

        if ($provider) {

            $this->toggle_provider_packaging();
            $this->providers = Provider::with('packagings', 'labelings', 'accessories')->get();
            $this->p_provider =  $provider->id;
            $this->alert('success', 'Provider Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }

    public function create_operation()
    {
        $operation = Operation::create([
            'operation_number' => $this->operation_number
        ]);
        if ($operation)
            return $operation;
    }


 
    public function reference()
    {
        $this->validate([
            'packaging_name' => 'required',
            'packaging_type' => 'required',
            'packaging_volume' => 'required',
            'accessory_name' => 'nullable',
            'labeling_type' => 'nullable',
            'p_volume' => 'required',
        ]);
        $code = '';
        $packaging = '';
        $type = '';
        $labeltype = '';
        switch ($this->packaging_name) {

                /// bottle
            case ('Bottle'):
                switch ($this->accessory_name) {
                    case ('Pipette'):
                        $packaging = 'PIP-';


                        break;
                    case ('Spray'):
                        $packaging = 'SP-';


                        break;

                    case ('Pump'):
                        $packaging = 'PMP-';


                        break;
                    case ('Dropper'):
                        $packaging = 'DRP-';


                        break;
                    default:
                        $packaging = 'Bot-';
                }
                break;
            case ('Jar'):
                $packaging = 'Jar-';


                break;
            case ('Pots'):
                $packaging = 'POT-';


                break;
            case ('Poches'):
                $packaging = 'PCH-';


                break;
            case ('Jug'):
                $packaging = 'JUG-';


                break;
            default:
                $packaging = '';
        }

        switch ($this->packaging_type) {
            case ('Glass'):
                $type = 'G';


                break;
            case ('Plastic'):
                $type = 'P';


                break;

            case ('Metalic'):
                $type = 'M';


                break;
            case ('Alluminum'):
                $type = 'AL';


                break;
            case ('Paper'):
                $type = 'PA';


                break;
            default:
                $type = '';
        }
        switch ($this->labeling_type) {
            case ('Screen Printing'):
                $labeltype = '-SP';


                break;
            case ('Sticker Label'):
                $labeltype = '-L';


                break;

            default:
                $labeltype = '';
        }
        $code = $packaging . '' . $type . '-' . $this->packaging_volume . '' . $this->p_volume . '' . $labeltype . '/';
    }

    public function create_product()
    {

        $labeling='';
        $accessory='';
        $this->validate([
            'operation_number' => 'nullable',
            'packaging_name' => 'required',
            'packaging_shape' => 'required',
            'packaging_type' => 'required',
            'packaging_volume' => 'required',
            'packaging_color' => 'required',
            'p_price' => 'required',
            'image_packaging' => 'nullable|image|max:2048',

            'p_email' => 'nullable|email',
            'p_date' => 'nullable|date',
            'p_phone_1' => 'nullable',
            'p_phone_2' => 'nullable',
            'p_adresse' => 'nullable',
            'p_provider' => 'required',
            'p_volume' => 'required',

            'accessory_name' => 'nullable',
            'accessory_type' => 'nullable',
            'accessory_color' => 'nullable',
            'a_price' => 'nullable',
            'image_accessory' => 'nullable|image|max:2048',
            'a_provider'=>'nullable',

            'a_email' => 'nullable|email',
            'a_date' => 'nullable|date',
            'a_phone_1' => 'nullable',
            'a_phone_2' => 'nullable',
            'a_adresse' => 'nullable',

            'labeling_type' => 'nullable',
            'l_price' => 'nullable',
            'image_labeling' => 'nullable|image|max:2048',

            'l_email' => 'nullable|email',
            'l_date' => 'nullable|date',
            'l_phone_1' => 'nullable',
            'l_phone_2' => 'nullable',
            'l_adresse' => 'nullable',
            'l_provider' => 'nullable',

        ]);

        $operation = Operation::firstOrCreate([
            'operation_number' => $this->operation_number
        ]);
        ///////////////////////

        $packaging = Packaging::firstOrCreate([
            'name' => $this->packaging_name,
            'type' => $this->packaging_type,
            'volume' => $this->packaging_volume,
            'mode_volume' => $this->p_volume,
            'shape' => $this->packaging_shape,
            'color' => $this->packaging_color,
            'image_packaging' => $this->image_packaging ? $this->image_packaging->store('packagings', 'public') : null,
        ]);

        $provider_packaging= ProviderPackaging::firstOrCreate([
            'packaging_id'=>$packaging->id,
            'provider_id'=>$this->p_provider,
            'price'=>$this->p_price,
            'date_received'=>$this->p_date
        ]);
        ///////////////////////////
        if($this->accessory_name){
            $this->validate([
                'accessory_name' => 'required',
                'accessory_type' => 'required',
                'accessory_color' => 'required',
                'a_price' => 'required',
                'image_accessory' => 'nullable|image|max:2048',
                'a_provider'=>'required',
            ]);
            $accessory = Accessory::firstOrCreate([
                'name' => $this->accessory_name,
                'type' => $this->accessory_type,
                'color' => $this->accessory_color,
                'image_accessory' => $this->image_accessory ? $this->image_accessory->store('accessories', 'public') : null,
            ]);
            $provider_accessory= ProviderAccessory::firstOrCreate([
                'accessory_id'=>$accessory->id,
                'provider_id'=>$this->a_provider,
                'price'=>$this->a_price,
                'date_received'=>$this->a_date
            ]);
        }
 

        ///////////////////////////////
        if($this->labeling_type){
            $labeling = Labeling::firstOrCreate([
                'type' => $this->labeling_type,
                'image_labeling' => $this->image_labeling ? $this->image_labeling->store('labelings', 'public') : null,
            ]);
            if($labeling){
                $this->validate([
                    'l_provider' => 'resuired',
                ]);
               $provider_labeling= ProviderLebeling::firstOrCreate([
                'labeling_id'=>$labeling->id,
                'provider_id'=>$this->l_provider,
                'price'=>$this->l_price,
                'date_received'=>$this->l_date
            ]); 
            }
            
        }
       
           

     
        
        $code = '';
        $pckg= '';
        $type = '';
        $labeltype = '';
        switch ($this->packaging_name) {

                /// bottle
            case ('Bottle'):
                switch ($this->accessory_name) {
                    case ('Pipette'):
                        $pckg= 'PIP-';


                        break;
                    case ('Spray'):
                        $pckg= 'SPY-';


                        break;

                    case ('Pump'):
                        $pckg= 'PMP-';


                        break;
                    case ('Dropper'):
                        $pckg= 'DRP-';


                        break;
                    default:
                        $pckg= '';
                }
                break;
            case ('Jar'):
                $pckg= 'Jar-';


                break;
            case ('Pots'):
                $pckg= 'POT-';


                break;
            case ('Poches'):
                $pckg= 'PCH-';


                break;
            case ('Jug'):
                $pckg= 'JUG-';


                break;
            default:
                $pckg= '';
        }

        switch ($this->packaging_type) {
            case ('Glass'):
                $type = 'G';


                break;
            case ('Plastic'):
                $type = 'P';


                break;

            case ('Metalic'):
                $type = 'M';


                break;
            case ('Alluminum'):
                $type = 'AL';


                break;
            case ('Paper'):
                $type = 'PA';


                break;
            default:
                $type = '';
        }
        switch ($this->labeling_type) {
            case ('Screen Printing'):
                $labeltype = '-SP';


                break;
            case ('Sticker Label'):
                $labeltype = '-L';


                break;

            default:
                $labeltype = '';
        }
        $access= '';
        if($accessory){
            $accss= $accessory->id;
        }else{
            $access= '';
        }
        $code = $pckg. '' . $type . '-' . $this->packaging_volume . '' . $this->p_volume . '' . $labeltype . '/'.$packaging->id.'-'.$access;
           /////////////////////
           $packaging_accesssory_labeling = PackagingAccessoryLabeling::firstOrCreate([
            'accessory_id' => $accessory?$accessory->id:null,
            'packaging_id' => $packaging->id,
            'labeling_id' => $labeling?$labeling->id:null,
            'code'=> $code
        ]);
        ///////////////////////
        if($packaging_accesssory_labeling){
           $this->alert('success', 'Product Created !', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
                ]);
                return redirect()->to('/packagingsList');  
        }
       
    }
    public function save_labeling_provider()
    {
        $this->validate([
            'l_company_name' => 'required',
            'l_contact_name' => 'required',
            'l_adresse' => 'required',
            'l_phone_1' => 'required',
            'l_phone_2' => 'nullable',
            'l_email' => 'required',
        ]);
        $provider = Provider::firstOrCreate([
            'company_name' => $this->l_company_name,
            'contact_name' => $this->l_contact_name,
            'adresse' => $this->l_adresse,
            'phone_1' => $this->l_phone_1,
            'phone_2' => $this->l_phone_2,
            'email' => $this->l_email,
        ]);

        if ($provider) {

            $this->toggle_provider_labeling();
            $this->providers = Provider::with('packagings', 'labelings', 'accessories')->get();
            $this->l_provider =  $provider->id;
            $this->alert('success', 'Product Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }
    public function save_accessory_provider()
    {

        $this->validate([
            'a_company_name' => 'required',
            'a_contact_name' => 'required',
            'a_adresse' => 'required',
            'a_phone_1' => 'required',
            'a_phone_2' => 'nullable',
            'a_email' => 'required',
        ]);
        $provider = Provider::firstOrCreate([
            'company_name' => $this->a_company_name,
            'contact_name' => $this->a_contact_name,
            'adresse' => $this->a_adresse,
            'phone_1' => $this->a_phone_1,
            'phone_2' => $this->a_phone_2,
            'email' => $this->a_email,
        ]);

        if ($provider) {

            $this->toggle_provider_accessory();
            $this->providers = Provider::with('packagings', 'labelings', 'accessories')->get();
            $this->a_provider =  $provider->id;
            $this->alert('success', 'Product Created !', [
                'position' => 'center',
                'timer' => 3000,
                'toast' => true,
            ]);
        }
    }
    public function toggle_provider_labeling()
    {

        $this->add_provider_labeling = !$this->add_provider_labeling;
        $this->l_company_name = '';
        $this->l_contact_name = '';
        $this->l_adresse = '';
        $this->l_phone_1 = '';
        $this->l_phone_2 = '';
        $this->l_email = '';
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
