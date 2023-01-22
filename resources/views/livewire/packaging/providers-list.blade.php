<div>
    <x-example>
        <x-slot name="title">
            <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                    <h6 class="text-blueGray-700 text-xl font-bold">
                        Packagings Providers List
                    </h6>
                   
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
                                    Packagings
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody>
        
                            @foreach ($providers as $provider)
        
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md p-4">
                                    ID :{{$provider->id}}
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
                                    {{$provider->packagings->count()}} 
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