<div class="w-full mb-12 px-2">
    <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
      <div class="rounded-t mb-0 px-4 py-3 border-0">
        <div class="flex flex-wrap items-center">
          <div class="relative w-full px-4 max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-lg text-blueGray-700">
              Packaging List
            </h3>
          </div>
        </div>
      </div> <!-- Projects table -->
      <div class="px-2 my-4 mx-0">
  
        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Filtration Section </h3>
        <div class="flex flex-wrap">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Packaging Name
              </label>
              <select type="text" wire:model='packaging_name'
                class="border-0 px-3 py-3 bg-blueGray-200 text-blueGray-600 bg-white 
                              rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                <option value=""></option>
                <option value="PIP">Bottle - Pipette</option>
                <option value="SPY">Bottle - Spray</option>
                <option value="PMP">Bottle -Pump</option>
                <option value="DRP">Bottle - Dropper</option>
                <option value="JAR">Jar</option>
                <option value="POT">Pots</option>
                <option value="JUG">Jug</option>
                <option value="PCH">Poches</option>
              </select>
              @error('packaging_name')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
         
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Packaging Type
              </label>
              <select type="text" wire:model='packaging_type'
                class="border-0 px-3 py-3 bg-blueGray-200 text-blueGray-600 bg-white 
                              rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                <option value=""></option>
                <option value="G">Glass</option>
                <option value="P">Plastic</option>
                <option value="M">Metalic</option>
                <option value="AL">Alluminum</option>
                <option value="PA">Paper</option>
              </select>
              @error('packaging_type')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                Packaging Volume
              </label>
              <div class="flex">
                <input type="text" wire:model='packaging_volume'
                  class="border-0 px-3 py-3 bg-blueGray-200 text-blueGray-600 bg-white 
                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mr-4">
                <select type="text" wire:model='p_volume' class="border-0 px-3 py-3 bg-blueGray-200 text-blueGray-600 bg-white 
                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                  <option value=""></option>
                  <option value="G">G</option>
                  <option value="Kg">Kg</option>
                  <option value="Litre">Litre</option>
                  <option value="ml">ml</option>
                </select>
  
              </div>
              @error('packaging_volume')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
  
              @error('p_volume')
              <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
              @enderror
  
            </div>
          </div>
        </div>
        <div class="flex flex-wrap justify-center mb-4 ">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full  mx-12">
              <div class="text-center mt-6 ">
                <button wire:click.prevent='clear'
                  class="bg-red-500  text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                  type="submit">
                  Clear filter
                </button>
              </div>
            </div>
          </div>
  
        </div>
  
        <div class="block w-full overflow-x-auto">
  
        </div>
        <table class="items-center w-full bg-transparent border-collapse">
          <thead>
            <tr>
              <th
                class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Code Packaging
              </th>
              <th
                class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Packaging Name / Type / Color
              </th>
              <th
                class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Volume
              </th>
  
              <th
                class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Accessory
              </th>
              <th
                class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Labeling
              </th>
             
            <th
              class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
               Packagings (Providers)
            </th>
            <th
              class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
               Accessorys (Providers)
            </th>
            <th
              class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
               Labelings (Providers)
            </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($packagings as $item)
            <tr>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                 {{$item->code}}
              </td>
              <th
                class="border-t-0 px-2 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-1 text-left flex items-center">
                <img src="{{asset('storage/'.$this->packaging($item->packaging_id)->image_packaging)}}"
                  class="h-12 w-12 bg-white rounded-full border" alt="...">
                <span class="ml-3 font-bold text-blueGray-600">
                  {{$this->packaging($item->packaging_id)->name}} / {{$this->packaging($item->packaging_id)->type}} / {{$this->packaging($item->packaging_id)->color}}
                </span>
              </th>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                {{$this->packaging($item->packaging_id)->volume}} {{$this->packaging($item->packaging_id)->mode_volume}}
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                @if ($item->accessory_id)
                {{$this->accessory($item->accessory_id)->name}}/ {{$this->accessory($item->accessory_id)->type}} /{{$this->accessory($item->accessory_id)->color}}

                @else
                <span class="text-red-500">
                    Don't Has Accessory ! 
                </span>  
                @endif
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                @if ($item->labeling_id)
                        {{$this->labeling($item->labeling_id)->type}}
                @else
                <span class="text-red-500">
                    Don't Has Labeling ! 
                </span>  
                @endif
                
              </td>
     
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                
                <span class="cursor-pointer" wire:click.prevent='$emit("openModal", "provider.providers-list", {{ json_encode(["packaging" => $item->packaging_id]) }})'>
                    <span>{{$this->minPackagingPrice($item->packaging_id)}}</span> DH - <span>{{$this->maxPackagingPrice($item->packaging_id)}} DH</span>
                    <i class="fal fa-eye"></i>
                </span>
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
               
                
                @if ($item->accessory_id)
                <span class="cursor-pointer" wire:click.prevent='$emit("openModal", "provider.accessories", {{ json_encode(["accessory" => $item->accessory_id]) }})'>
                <span>{{$this->minAccessoryPrice($item->accessory_id)}}</span> DH - <span>{{$this->maxAccessoryPrice($item->accessory_id)}} DH</span>
                <i class="fal fa-eye"></i>
                    </span>  
                @else
                <span class="text-red-500">
                    Don't Has Accessory ! 
                </span>
                   
                @endif
               
              </td>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
                @if ($item->labeling_id)
                    
            
                <span class="cursor-pointer" wire:click.prevent='$emit("openModal", "provider.providers-list", {{ json_encode(["packaging" => $item->packaging_id]) }})'>
                    <span>{{$this->minLabelingPrice($item->labeling_id)}}</span> DH - <span>{{$this->maxLabelingPrice($item->labeling_id)}} DH</span>
                    <i class="fal fa-eye"></i>
                </span>
                @else
                <span class="text-red-500">
                    Don't Has Labeling ! 
                </span>
                   
                @endif
              </td>
             
  
            </tr>
            @endforeach
  
  
          </tbody>
        </table>
  
         {{ $packagings->links() }}
  
      </div>
    </div>
  </div>
  
  @livewire('livewire-ui-modal')