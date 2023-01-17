<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'MasterList') }}</title>
        @livewireStyles
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/styles/tailwind.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
    </head>

    <body class="font-sans antialiased">

        <div id="root">

            @include('layouts.navigation')
            <!-- Page Heading -->
        
            
            <!-- Page Content -->
            <div class="relative md:ml-64 bg-blueGray-50">
                <header class="bg-white shadow">
                    <div class=" mx-auto">
                        {{ $header }}
                    </div>
                </header>
                @include('layouts.nav')
                 {{ $slot }} 
            </div>
            
               
            
        </div>

            @livewireScripts
        <script src="{{asset('js/app.js')}}"></script>
        <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>  
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
    </body>
</html>
