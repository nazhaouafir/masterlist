<div class="w-full mb-12 px-4">
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
    <div class="px-4 my-4 mx-3">

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
              Packaging Name
            </th>

            <th
              class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
              Type / Color
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
             Packaging (Prices)
          </th>
          <th
            class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
             Accessory (Prices)
          </th>
          <th
            class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
             Labeling (Prices)
          </th>
          <th
            class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
             Total (Highest Prices)
          </th>
            <th
              class="px-0 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
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
              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4 text-left flex items-center">
              <img src="{{asset('storage/'.$this->packaging($item->packaging_id)->image_packaging)}}"
                class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-blueGray-600">
                {{$this->packaging($item->packaging_id)->name}}
              </span>
            </th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              {{$this->packaging($item->packaging_id)->type}} / {{$this->packaging($item->packaging_id)->color}}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              {{$this->packaging($item->packaging_id)->volume}} {{$this->packaging($item->packaging_id)->mode_volume}}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              {{$this->accessory($item->accessory_id)->name}}/ {{$this->accessory($item->accessory_id)->type}} /{{$this->accessory($item->accessory_id)->color}}
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              
              {{$this->labeling($item->labeling_id)->type}}
            </td>
   
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              
              <span>{{$this->minPackagingPrice($item->packaging_id)}}</span> DH - <span>{{$this->maxPackagingPrice($item->packaging_id)}} DH</span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              
              <span>{{$this->minAccessoryPrice($item->accessory_id)}}</span> DH - <span>{{$this->maxAccessoryPrice($item->accessory_id)}} DH</span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              
              <span>{{$this->minLabelingPrice($item->labeling_id)}}</span> DH - <span>{{$this->maxLabelingPrice($item->labeling_id)}} DH</span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-sm whitespace-nowrap p-4">
              
              <span>{{$this->maxPackagingPrice($item->packaging_id)+$this->maxAccessoryPrice($item->accessory_id)+$this->maxLabelingPrice($item->labeling_id)}} DH</span>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3"
                onclick="openDropdown(event,'table-light-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i>
              </a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                id="table-light-1-dropdown">
                <a href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a
                  href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another
                  action</a><a href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something
                  else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo"
                  class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated
                  link</a>
              </div>
            </td>
          </tr>
          @endforeach


        </tbody>
      </table> {{ $packagings->links() }}
    </div>
  </div>
</div>

@livewire('livewire-ui-modal')