<div class="px-4 md:px-2 mx-2 w-full mt-8">
    <div class="flex flex-wrap">
        <div class="w-full lg:w-12/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
                <div class="rounded-t bg-white mb-0 px-6 py-6">
                    <div class="text-center flex justify-between">
                        <h6 class="text-blueGray-700 text-xl font-bold">
                            Add New Packaging
                        </h6>
                        <button
                                wire:click='reference'
                            class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                            type="button">
                            Annuler
                        </button>
                    </div>
                    @livewire('livewire-ui-modal')
                </div> 
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                    <div>  
                        <div class="flex flex-wrap my-4">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Operation Number 
                                    </label>
                                    <input type="text"
                                        wire:model="operation_number"
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                        rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">   
                                    @error('operation_number')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                         
                                </div>
                            </div>
                        </div>
                        <h6 class="text-blueGray-400 text-sm mb-6 font-bold uppercase">
                            Packaging Informations
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Packaging Name
                                    </label>
                                    <select type="text"
                                        wire:model='packaging_name'
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
                                            wire:model='packaging_type'
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value=""></option>
                                        <option value="Glass">Glass</option>
                                        <option value="Plastic">Plastic</option>
                                        <option value="Metalic">Metalic</option>
                                        <option value="Alluminum">Alluminum</option>
                                        <option value="Paper">Paper</option>
                                    </select>
                                    @error('packaging_type')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="flex">
                                    <div class="relative w-full mb-3 ">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Packaging Color Ex: (Black, clear...)
                                        </label>
                                        <select type="text" wire:model='packaging_color'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                        rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                            <option value=""></option>
                                            <option value="White">White</option>
                                            <option value="Black">Black</option>
                                            <option value="Silver">Silver</option>
                                            <option value="Gold">Gold</option>
                                            <option value="Pink">Pink</option>
                                            <option value="Red">Red</option>
                                            <option value="Purple">Purple</option>
                                            <option value="Blue">Blue</option>
                                            <option value="Green">Green</option>
                                            <option value="Orange">Orange</option>
                                            <option value="Yellow">Yellow</option>
                                            <option value="Brown">Brown</option>
                                            <option value="Beige">Beige</option>
                                            <option value="Clear (transparent)">Clear (transparent)</option>
                                        </select>
                                        @error('packaging_color')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="relative w-full mb-3 ml-2">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Packaging Shape
                                        </label>
                                        <input type="text"
                                            wire:model='packaging_shape'
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow 
                                            focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('packaging_shape')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
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
                                                wire:model='packaging_volume'
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                            rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 mr-4">
                                            <select type="text"
                                                wire:model='p_volume'
                                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
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
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                    htmlfor="grid-password">
                                    Packaging Provider
                                </label>
                                <select type="text" wire:model='p_provider'
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    <option value="">Select Your Provider</option>
                                    @forelse ($providers as $item)
                                        <option value="{{$item->id}}">{{$item->company_name}}</option>
                                    @empty
                                        
                                    @endforelse
                                </select>
                                @error('p_provider')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                </div>
                                <span wire:click="toggle_provider_packaging" class="text-blue-600 cursor-pointer text-sm underline">
                                    <i class="fal fa-plus "></i> Add New Packaging Provider
                                </span>  
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Price
                                    </label>
                                    <input type="text" placeholder="DH" wire:model='p_price'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm 
                                        shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('p_price')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                         Date
                                    </label>
                                    <input type="date" wire:model='p_date'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                        text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                @error('p_date')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                        </div>
                         {{--  --}}
                         @if($add_provider_packaging)
                             <div class="border-2 mt-2 border-blueGray-500 p-2">
                            <h6 class="text-blueGray-400 text-sm mb-6 font-bold uppercase">
                                Provider Informations
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Company Name
                                        </label>
                                        <input type="text"
                                            wire:model='p_company_name'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                @error('p_company_name')
                                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Contact Name
                                        </label>
                                        <input type="text"
                                            wire:model='p_contact_name'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('p_contact_name')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Addresse
                                        </label>
                                        <input type="text"
                                            wire:model='p_adresse'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                     @error('p_adresse')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Phone 1
                                        </label>
                                        <input type="text"
                                            wire:model='p_phone_1'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                     @error('p_phone_1')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Phone 2
                                        </label>
                                        <input type="text"
                                            wire:model='p_phone_2'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('p_phone_2')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                            </div>
                                    
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            email
                                        </label>
                                        <input type="email"
                                            wire:model='p_email'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('p_email')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="rounded-t  mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <button 
                                              wire:click.prevent='save_packaging_provider'
                                            class="bg-green-600 text-blue-400 active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                        rounded shadow hover:shadow-md outline-none 
                                                        focus:outline-none mr-1 ease-linear transition-all duration-150"
                                            type="button">
                                            Save
                                        </button>
                                        <button   
                                        wire.click.prevent='toggle_provider_packaging'
                                        class="bg-red-500 text-white active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                    rounded shadow hover:shadow-md outline-none 
                                                    focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Cancel
                                    </button>
                                    </div>
                                </div>
                               
                            </div>
                        </div> 
                         @endif
                        
                        {{--  --}}
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 mt-6 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="mb-5 text-center">
                                        @isset($image_packaging)
                                        <div
                                            class="mx-auto w-16 h-16 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                                            <img id="image" class="object-cover w-full h-16 rounded-full"
                                                src={{$image_packaging->temporaryUrl()}} />
                                        </div>
                                        @endisset
                                        <label for="fileInput1" type="button"
                                            class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path
                                                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                <circle cx="12" cy="13" r="3" />
                                            </svg>
                                            importez une image
                                        </label>
                                        <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Appuiyer pour
                                            ajouter une photo</div>
                                        <input id="fileInput1" accept="image/*" class="hidden" type="file"
                                            wire:model="image_packaging">
                                        @error('image_packaging')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Accessory Informations
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Accessory Name
                                    </label>
                                    <select type="text" wire:model='accessory_name'
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value=""></option>
                                        <option value="Pipette">Pipette</option>
                                        <option value="Spray">Spray</option>
                                        <option value="Pump">Pump</option>
                                        <option value="Dropper">Dropper</option>
                                        <option value="Cover">Cover</option>
                                    </select>
                            @error('accessory_name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Accessory Type (Glass, plastic)
                                    </label>
                                    <select type="text" wire:model='accessory_type'
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value=""></option>
                                        <option value="Glass">Glass</option>
                                        <option value="Plastic">Plastic</option>
                                        <option value="Metallic">Metallic</option>
                                    </select>
                                </div>
                                @error('accessory_type')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Accessory Color (Black, clear)
                                    </label>
                                    <select type="text" wire:model='accessory_color'
                                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                    rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value=""></option>
                                        <option value="White">White</option>
                                        <option value="Black">Black</option>
                                        <option value="Silver">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Red">Red</option>
                                        <option value="Purple">Purple</option>
                                        <option value="Blue">Blue</option>
                                        <option value="Green">Green</option>
                                        <option value="Orange">Orange</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Brown">Brown</option>
                                        <option value="Beige">Beige</option>
                                        <option value="Clear (transparent)">Clear (transparent)</option>
                                    </select>
                                    @error('accessory_color')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Is the Same Provider ?
                                    </label>
                                    <div class="w-full pt-4">
                                        <label class="inline-flex items-center cursor-pointer"><input
                                                name="same_provider" type="radio" wire:model="same_provider" value="1"
                                                class="form-radio appearance-none ml-1 w-5 h-5 ease-linear transition-all duration-150 border border-blueGray-400 rounded-full checked:bg-blueGray-800 checked:border-blueGray-800 focus:border-blueGray-400"><span
                                                class="ml-2 text-sm font-semibold text-blueGray-700">Yes</span>
                                            </label>
                                            <label class="inline-flex items-center cursor-pointer"><input
                                                name="not_same_provider" type="radio" wire:model="same_provider" value="0"
                                                class="form-radio appearance-none ml-1 w-5 h-5 ease-linear transition-all duration-150 border border-blueGray-400 rounded-full checked:bg-blueGray-800 checked:border-blueGray-800 focus:border-blueGray-400"><span
                                                class="ml-2 text-sm font-semibold text-blueGray-700">No</span>
                                            </label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                           
                        <div class="flex flex-wrap">
                        
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Provider
                                    </label>
                                    <select type="text" wire:model='a_provider'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                        rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Your Provider</option>
                                        @forelse ($providers as $item)
                                            <option value="{{$item->id}}">{{$item->company_name}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                    @error('a_provider')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <span wire:click="toggle_provider_accessory" class="text-blue-600 cursor-pointer text-sm underline">
                                    <i class="fal fa-plus "></i> Add New Accessories Provider
                                </span> 
                            </div>
                          
        
                          <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Price
                                    </label>
                                    <input type="text" placeholder="Dh" wire:model='a_price'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm 
                                        shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">

                                        @error('a_price')
                                         <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                         Date
                                    </label>
                                    <input type="date" wire:model='a_date'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                        text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    
                                        @error('a_date')
                                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                        </div> 
                          {{--  --}}
                          @if ($add_provider_accessory)
                          <div class="border-2 mt-2 border-blueGray-500 p-2">
                         <h6 class="text-blueGray-400 text-sm mb-6 font-bold uppercase">
                            Accessories Provider Informations
                         </h6>
                         <div class="flex flex-wrap">
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         Company Name
                                     </label>
                                     <input type="text"
                                         wire:model='a_company_name'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('a_company_name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         Contact Name
                                     </label>
                                     <input type="text"
                                         wire:model='a_contact_name'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('a_contact_name')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         Addresse
                                     </label>
                                     <input type="text"
                                         wire:model='a_adresse'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('a_adresse')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         Phone 1
                                     </label>
                                     <input type="text"
                                         wire:model='a_phone_1'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('a_phone_1')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                                 
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         Phone 2
                                     </label>
                                     <input type="text"
                                         wire:model='a_phone_2'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                 @error('a_phone_2')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                                 
                             </div>
                             <div class="w-full lg:w-4/12 px-4">
                                 <div class="relative w-full mb-3">
                                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                         htmlfor="grid-password">
                                         email
                                     </label>
                                     <input type="email"
                                         wire:model='a_email'
                                             class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                             rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('a_email')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                 </div>
                             </div>
                             <div class="rounded-t  mb-0 px-6 py-6">
                                 <div class="text-center flex justify-between">
                                     <button  
                                            wire:click.prevent='save_accessory_provider' 
                                         class="bg-green-600 text-blue-400 active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                     rounded shadow hover:shadow-md outline-none 
                                                     focus:outline-none mr-1 ease-linear transition-all duration-150"
                                         type="button">
                                         Save
                                     </button>
                                     <button   
                                        wire:click="toggle_provider_accessory"
                                        class="bg-red-500 text-white active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                    rounded shadow hover:shadow-md outline-none 
                                                    focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button">
                                     Cancel
                                 </button>
                                 </div>
                             </div>
                            
                         </div>
                     </div> 
                      @endif
                     
                     {{--  --}}
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 mt-6 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="mb-5 text-center">
                                        @isset($image_accessory)
                                        <div
                                            class="mx-auto w-16 h-16 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                                            <img id="image" class="object-cover w-full h-16 rounded-full"
                                                src={{$image_accessory->temporaryUrl()}} />
                                        </div>
                                        @endisset
                                        <label for="fileInput2" type="button"
                                            class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path
                                                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                <circle cx="12" cy="13" r="3" />
                                            </svg>
                                            importez une image
                                        </label>
                                        <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Appuiyer pour
                                            ajouter une photo</div>
                                        <input id="fileInput2" accept="image/*" class="hidden" type="file"
                                            wire:model="image_accessory">
                                        @error('image_accessory')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-6 border-b-1 border-blueGray-300">
                        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                            Labeling
                        </h6>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Labeling Type (Label,Screen Printed)
                                    </label>
                                    <select type="text" wire:model='labeling_type'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                        rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="">Select Labeling Type</option>
                                        <option value="Screen Printing">Screen Printing</option>
                                        <option value="Sticker Label">Sticker Label</option>
                                    </select>
                                    @error('labeling_type')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Labeling Provider
                                    </label>
                                    <select type="text" wire:model='l_provider'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                        rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value=""></option>
                                        @forelse ($providers as $item)
                                            <option value="{{$item->id}}">{{$item->company_name}}</option>
                                        @empty
                                            
                                        @endforelse
                                    </select>
                                    @error('l_provider')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <span wire:click="toggle_provider_labeling" class="text-blue-600 cursor-pointer text-sm underline">
                                    <i class="fal fa-plus "></i> Add New Labeling Provider
                                </span> 
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                        Price
                                    </label>
                                    <input type="text"
                                    wire:model='l_price'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow
                                         focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                         @error('l_price')
                                         <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                         @enderror
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                        htmlfor="grid-password">
                                         Date
                                    </label>
                                    <input type="date"
                                        wire:model='l_date'
                                        class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded 
                                        text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('l_date')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                             {{--  --}}
                             @if ($add_provider_labeling)
                             <div class="border-2 mt-2 border-blueGray-500 p-2">
                            <h6 class="text-blueGray-400 text-sm mb-6 font-bold uppercase">
                                Provider Informations
                            </h6>
                            <div class="flex flex-wrap">
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Company Name
                                        </label>
                                        <input type="text"
                                            wire:model='l_company_name'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('l_company_name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Contact Name
                                        </label>
                                        <input type="text"
                                            wire:model='l_contact_name'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        @error('l_contact_name')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Addresse
                                        </label>
                                        <input type="text"
                                            wire:model='l_adresse'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    @error('l_adresse')
                                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                    </div>
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Phone 1
                                        </label>
                                        <input type="text"
                                            wire:model='l_phone_1'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                @error('l_phone_1')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                    </div>
                                    
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            Phone 2
                                        </label>
                                        <input type="text"
                                            wire:model='l_phone_2'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                @error('l_phone_2')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                    </div>
                                    
                                </div>
                                <div class="w-full lg:w-4/12 px-4">
                                    <div class="relative w-full mb-3">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                                            htmlfor="grid-password">
                                            email
                                        </label>
                                        <input type="email"
                                            wire:model='l_email'
                                                class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white 
                                                rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                                @error('l_email')
                                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                                @enderror
                                    </div>
                                </div>
                                <div class="rounded-t  mb-0 px-6 py-6">
                                    <div class="text-center flex justify-between">
                                        <button   
                                            wire:click.prevent="save_labeling_provider"
                                            class="bg-green-600 text-blue-400 active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                        rounded shadow hover:shadow-md outline-none 
                                                        focus:outline-none mr-1 ease-linear transition-all duration-150"
                                            type="button">
                                            Save
                                        </button>
                                        <button   
                                        wire:click="toggle_provider_labeling"
                                        class="bg-red-500 text-white active:bg-blueGray-500 font-bold uppercase text-xs px-4 py-2 
                                                    rounded shadow hover:shadow-md outline-none 
                                                    focus:outline-none mr-1 ease-linear transition-all duration-150"
                                        type="button">
                                        Cancel
                                    </button>
                                    </div>
                                </div>
                               
                            </div>
                        </div> 
                         @endif
                        
                        {{--  --}}
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 mt-6 px-4">
                                <div class="relative w-full mb-3">
                                    <div class="mb-5 text-center">
                                        @isset($image_labeling)
                                        <div
                                            class="mx-auto w-16 h-16 mb-2 border rounded-full relative bg-gray-100 mb-4 shadow-inset">
                                            <img id="image" class="object-cover w-full h-16 rounded-full"
                                                src={{$image_labeling->temporaryUrl()}} />
                                        </div>
                                        @endisset
                                        <label for="fileInput3" type="button"
                                            class="cursor-pointer inine-flex justify-between items-center focus:outline-none border py-2 px-4 rounded-lg shadow-sm text-left text-gray-600 bg-white hover:bg-gray-100 font-medium">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="inline-flex flex-shrink-0 w-6 h-6 -mt-1 mr-1" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                                <path
                                                    d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />
                                                <circle cx="12" cy="13" r="3" />
                                            </svg>
                                            importez une image
                                        </label>
                                        <div class="mx-auto w-48 text-gray-500 text-xs text-center mt-1">Appuiyer pour
                                            ajouter une photo</div>
                                        <input id="fileInput3" accept="image/*" class="hidden" type="file"
                                            wire:model="image_labeling">
                                        @error('image_labeling')
                                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap">
                            <div class="w-full lg:w-12/12 px-4">
                                <div class="relative w-full mx-12">
                                    <div class="text-center mt-6 ">
                                        <button
                                        wire:click.prevent='create_product'
                                          class="bg-blueGray-800  text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow 
                                          hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                                          type="submit">
                                         Enregistre
                                        </button>
                                      </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        

    </div>
</div>

