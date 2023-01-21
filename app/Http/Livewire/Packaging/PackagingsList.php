<?php

namespace App\Http\Livewire\Packaging;

use App\Http\Livewire\Provider\Packagings;
use App\Models\Accessory;
use App\Models\Labeling;
use App\Models\Packaging;
use App\Models\PackagingAccessoryLabeling;
use App\Models\ProviderAccessory;
use App\Models\ProviderLebeling;
use App\Models\ProviderPackaging;
use Livewire\Component;
use Livewire\WithPagination;

class PackagingsList extends Component
{
    use WithPagination;
    public $search='';
    public $packaging_name;
    public $accessory_name;
    public $packaging_type;
    public $labeling_type;
    public $packaging_volume;
    public $p_volume;

   public function updated(){
    $this->search ='';
    if($this->packaging_name){$this->search = $this->packaging_name;}
    if($this->packaging_name && $this->packaging_type){ $this->search = $this->packaging_name.'-'.$this->packaging_type;}
    if($this->packaging_name && $this->packaging_type && $this->packaging_volume) {$this->search= $this->packaging_name.'-'.$this->packaging_type.'-'.$this->packaging_volume;}
    if($this->packaging_name && $this->packaging_type && $this->packaging_volume && $this->p_volume)
        {$this->search = $this->packaging_name.'-'.$this->packaging_type.'-'.$this->packaging_volume.''.$this->p_volume;}
        // dd($this->search);
   }
    public function packaging($id){
        $packaging = Packaging::with('accessories','labelings','providers')->find($id);
        return $packaging;
        }
    public function accessory($id){
        $accessory = Accessory::with('packagings','providers')->find($id);
        return $accessory;
        }
    public function labeling($id){
            $labeling = Labeling::with('packagings','providers')->find($id);
            return $labeling;
            }
    public function clear(){
        $this->search='';
    $this->packaging_name='';
    $this->accessory_name='';
    $this->packaging_type='';
    $this->labeling_type='';
    $this->packaging_volume='';
    $this->p_volume='';
    }
    public function minPackagingPrice($id){
        $provider_packagings = ProviderPackaging::where('packaging_id',$id)->get();
        
        return $provider_packagings->min('price');
        
    }
    public function maxPackagingPrice($id){
        $provider_packagings = ProviderPackaging::where('packaging_id',$id)->get();
        
        return $provider_packagings->max('price');
        
    }
    public function minAccessoryPrice($id){
        $provider_accesories = ProviderAccessory::where('accessory_id',$id)->get();
        
        return $provider_accesories->min('price');
        
    }
    public function maxAccessoryPrice($id){
        $provider_accessories = ProviderAccessory::where('accessory_id',$id)->get();
        
        return $provider_accessories->max('price');
        
    }
    public function minLabelingPrice($id){
        $provider_labelings = ProviderLebeling::where('labeling_id',$id)->get();
        
        return $provider_labelings->min('price');
        
    }
    public function maxLabelingPrice($id){
        $provider_labeling = ProviderLebeling::where('labeling_id',$id)->get();
        
        return $provider_labeling->max('price');
        
    }
    public function render()
    {
        return view('livewire.packaging.packagings-list',[
            'packagings'=>PackagingAccessoryLabeling::search('code', $this->search)->paginate(10),
        ])->layout('layouts.app');
    }
}
