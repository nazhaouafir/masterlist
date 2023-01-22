<div>
    <x-example>
        <x-slot name="title">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Providers Of accessory : {{$accessory->id}}, ({{$accessory->name}} / {{$accessory->type}} / {{$accessory->color}})
                    </h6>
                    <button wire:click.prevent="$emit('closeModal')"
                        class="bg-red-500 text-white active:bg-red-500
                   font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                        type="button">
                        Fermer
                    </button>
                </div>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="w-full mb-12">
                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
                  <div class="block w-full overflow-x-auto">
                    <!-- Projects table -->
                    <table class="items-center w-full bg-transparent border-collapse">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Code Provider
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Company Name
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Contact Name
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    E-mail
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Téléphone
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Adresse
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                    Price
                                </th>
                                <th
                                    class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-blueGray-50 text-blueGray-500 border-blueGray-100">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
        
                            @foreach ($accessory->providers as $provider)
        
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md p-4">
                                    {{$provider->id}}
                                </td>
        
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md p-4">
                                    {{$provider->company_name}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    {{$provider->contact_name}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    {{$provider->email}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    {{$provider->phone_1}} / {{$provider->phone_2}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    {{$provider->adresse}}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    {{$provider->pivot->price}} DH
                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
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
                    </table>
                  </div>
                </div>
              </div>
        </x-slot>
        <x-slot name="buttons">

        </x-slot>
    </x-example>

</div>