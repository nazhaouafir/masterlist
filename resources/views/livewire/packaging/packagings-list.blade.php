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
      </div>  <!-- Projects table -->
        <div class="px-4 my-4 mx-3">

          <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Choice Service</h3>
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlfor="grid-password">
                        Packaging Name
                    </label>
                    <select type="text"
                        wire:model='search'
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        <option value=""></option>
                        <option value="Bottle">Bottle</option>
                        <option value="Jar">Jar</option>
                        <option value="Pots">Pots</option>
                        <option value="Jug">Jug</option>
                        <option value="Poches">Poches</option>
                    </select>
                    @error('packaging_name')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlfor="grid-password">
                        Packaging Type 
                    </label>
                    <select type="text"
                            wire:model='type'
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                        <option value=""></option>
                        <option value="Glass">Glass</option>
                        <option value="Plastic">Plastic</option>
                        <option value="Metallic">Metallic</option>
                    </select>
                    @error('packaging_type')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlfor="grid-password">
                        Packaging Color Ex: (Black, clear...)
                    </label>
                    <input type="text"
                        wire:model='color'
                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow 
                        focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                    @error('packaging_color')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="w-full lg:w-6/12 px-4">
                <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                        htmlfor="grid-password">
                        Packaging Volume
                    </label>
                    <div class="flex">
                        <input type="text"
                                wire:model='volume'
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mr-4">
                            <select type="text"
                                wire:model='modevolume'
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                <option value=""></option>
                                <option value="Gramme">Gramme</option>
                                <option value="Kg">Kg</option>
                                <option value="Litre">Litre</option>
                                <option value="Ml">Ml</option>    
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
                    <button
                    wire:click.prevent='clear'
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
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Packaging Id
              </th>
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Packaging
              </th>

              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Type
              </th>
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Volume
              </th>
              
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                Operations
              </th>
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                 Providers
              </th>
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                price 
             </th>
              <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($packagings as $item)
            <tr>
              <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                ID : {{$item->id}}
            </td>
                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left flex items-center">
                  <img src="{{asset('storage/'.$item->image_packaging)}}" class="h-12 w-12 bg-white rounded-full border" alt="...">
                  <span class="ml-3 font-bold text-blueGray-600">
                    {{$item->name}}
                  </span>
                </th>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                    {{$item->type}} / {{$item->color}}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                  {{$item->volume}} {{$item->mode_volume}}
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                      @foreach ($item->operations as $o)
                          {{$o->operation_number}},
                      @endforeach  
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                  <span class="cursor-pointer"
                  wire:click.prevent="$emit('openModal', 'provider.providers-list', 
                  {{ json_encode(["packaging"=> $item->id]) }})">
                  <i class="fal fa-eye"></i>
              </span>
                  {{$item->providers->count()}} 
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                       <span>{{$this->minPrice($item->id)}}</span>  DH - <span>{{$this->maxPrice($item->id)}}</span>  DH
                </td>
                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
                  <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-light-1-dropdown')">
                    <i class="fas fa-ellipsis-v"></i>
                  </a>
                  <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-light-1-dropdown">
                    <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                    <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                    <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
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