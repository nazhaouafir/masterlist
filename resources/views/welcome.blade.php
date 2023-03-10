<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                    viewBox="0 0 250 130" style="enable-background:new 0 0 30 20;" xml:space="preserve" width="150" height="100.001"><style type="text/css">
                        .st0{fill:#1C3F89;}
                        .st1{fill:#A5A000;}
                    </style><g><g><path class="st0" d="M0.664 73.585V72.334h5.335v1.585H5.585L0.664 73.585zM6 88.001v1.585H0.664v-1.249l4.915 -0.416H6zM3.665 80.501c0 -2.665 0 -5.415 -0.086 -8.165H8.335C8.25 75 8.25 77.749 8.25 80.501v0.75c0 3 0 5.665 0.086 8.415H3.585c0.086 -2.665 0.086 -5.335 0.086 -8.165V80.501zM6 79.999h3.665c3.665 0 5.335 -1.085 5.335 -3.25c0 -2.165 -1.585 -3.085 -4.835 -3.085H6V72.334h5.5c5.5 0 8 1.751 8 4.165c0 1.999 -1.751 3.665 -7 4.165V80.415c5.915 0.335 8.335 1.999 8.335 4.415c0 2.25 -2.415 4.75 -10.25 4.75H6V88.335H10c3.915 0 6 -1.249 6 -3.5c0 -2.415 -1.915 -3.5 -6.165 -3.5H6V79.999z"/><path class="st0" d="M45.665 81c0 5.835 -5.415 9.085 -11.085 9.085c-5.665 0 -11.085 -3.085 -11.085 -9.085c0 -5.835 5.415 -9.085 11.085 -9.085C40.249 71.915 45.665 75 45.665 81zM34.585 88.665c4.25 0 6 -3.585 6 -7.665c0 -4.085 -1.751 -7.665 -6 -7.665S28.5 76.916 28.5 81C28.5 85.166 30.334 88.665 34.585 88.665z"/><path class="st0" d="M49.249 73.751l2.085 -1.414L50.336 77.085h-2.501l0.165 -4.75h20.165l0.165 4.75h-2.501L64.916 72.334l2.085 1.414H49.249zM58.665 88.001l5.165 0.416v1.249H52.414v-1.249l5.165 -0.416H58.665zM55.751 80.415c0 -2.665 0 -5.415 -0.086 -8.085h4.835C60.416 75 60.416 77.666 60.416 80.415v1.085c0 2.665 0 5.415 0.086 8.085H55.665c0.086 -2.665 0.086 -5.335 0.086 -8.085V80.415z"/><path class="st0" d="M69.334 88.415l3.585 -0.416h0.664l3.665 0.416v1.249H69.334V88.415zM79.665 72.251h2.915l8.085 17.335h-4.75L79.415 74.835L80.501 74.165l-7 15.5H71.501L79.665 72.251zM75.665 82.999h9.585l0.664 1.335H75.085L75.665 82.999zM82.166 88.5l4.25 -0.416h1.585l4.5 0.416v1.165H82.166V88.5z"/><path class="st0" d="M94.084 88.415l3.75 -0.416h0.836l4.335 0.416v1.249h-9V88.415zM96.165 73.249l2.165 0.664l-4.085 -0.335V72.334h6.75l13.75 13.835v3.585h-2.085L96.165 73.249zM97.166 72.334l2.085 1.249v16.085h-2.085V72.334zM108.75 72.334h9v1.249L114.165 73.999h-0.836l-4.5 -0.416V72.334zM112.665 72.334h2.085v17.415l-2.085 -1.5V72.334z"/><path class="st0" d="M162.75 87.165v1.414l-2.335 0.335l1.085 -4h2.415l-0.165 3.915c-2.085 0.836 -4.585 1.249 -7.335 1.249c-7 0 -12.165 -3.416 -12.165 -9.085c0 -5.665 5.5 -9.085 12.335 -9.085c2.335 0 4.665 0.335 6.915 1.249l0.165 3.915h-2.415l-1.085 -4l2.335 0.416V75c-1.835 -1.249 -3.585 -1.665 -5.25 -1.665c-4.335 0 -7.915 2.501 -7.915 7.665c0 5.165 3.334 7.665 7.665 7.665C158.915 88.665 160.916 88.166 162.75 87.165z"/><path class="st0" d="M165.416 88.415l3.585 -0.416h0.664l3.665 0.416v1.249h-7.915V88.415zM175.75 72.251h2.915l8.085 17.335h-4.75l-6.585 -14.75l1.085 -0.664l-7 15.5h-1.915L175.75 72.251zM171.75 82.999h9.585l0.664 1.335h-10.915L171.75 82.999zM178.25 88.5l4.25 -0.416h1.585l4.5 0.416v1.165h-10.335V88.5z"/><path class="st0" d="M190.335 73.585V72.334h10.835v1.249l-4.915 0.416h-1.001L190.335 73.585zM195.665 88.001v1.585h-5.335v-1.249l4.915 -0.416H195.665zM193.25 72.334h4.835C198 75 198 77.749 198 80.415v1.585c0 2.25 0 5 0.086 7.586h-4.835c0.086 -2.665 0.086 -5.415 0.086 -7.835V80.415C193.415 77.749 193.415 75 193.25 72.334zM208.75 84.665l-0.335 5h-12.75v-1.414h11.5l-2.335 1.414l1.414 -5H208.75z"/><path class="st0" d="M211.25 73.585V72.334H216.665v1.585h-0.5L211.25 73.585zM216.665 88.001v1.585h-5.335v-1.249l4.915 -0.416H216.665zM214.335 80.415c0 -2.665 0 -5.415 -0.086 -8.085h4.835C218.915 75 218.915 77.666 218.915 80.415v0.915c0 2.915 0 5.585 0.086 8.25h-4.835c0.086 -2.665 0.086 -5.335 0.086 -8.085V80.415zM225.915 72.334l2.085 1.414H216.665V72.334h12.585l0.251 4.585h-2.501L225.915 72.334zM224.585 81.499H216.665V80.085h7.915V81.499zM230.165 85.084l-0.251 4.585H216.665v-1.414h12.085l-2.085 1.414l1.085 -4.585H230.165zM223.5 80.415l0.5 -2.665h1.835v5.915h-1.835l-0.5 -2.749V80.415z"/><path class="st0" d="M231.5 88.415l3.585 -0.335h0.836l3.5 0.335v1.249h-7.915V88.415zM231.75 72.334h10.585v1.249l-4.75 0.416h-1.249l-4.585 -0.416V72.334zM241.665 80.415l1.414 0.585l-7.414 8.585h-2.335L241.665 80.415zM233.415 72.334h5.085l14 17.335h-5.085L233.415 72.334zM249.165 72.334h2.335l-7.835 8.915l-1.414 -0.664L249.165 72.334zM243.25 88.415l4.835 -0.416h1.165l4.915 0.416v1.249h-10.835V88.415zM245.335 72.334h7.835v1.249l-3.585 0.335h-0.836l-3.416 -0.335V72.334z"/></g></g><g><path class="st1" d="M126.915 90.75L126.915 90.75c-0.335 0 -0.664 -0.335 -0.664 -0.664V74.749c0 -0.416 0.251 -0.664 0.664 -0.664l0 0c0.335 0 0.664 0.335 0.664 0.664v15.335C127.585 90.499 127.335 90.75 126.915 90.75z"/><g><path class="st1" d="M117.665 76.999l0.251 0.165c0.165 0.086 0.335 0.086 0.5 0l7.5 -3.665c0.165 -0.086 0.165 -0.165 0 -0.251l-0.251 -0.165c-0.165 -0.086 -0.335 -0.086 -0.5 0l-7.5 3.665C117.585 76.834 117.585 76.916 117.665 76.999z"/><path class="st1" d="M120.251 77.25l0.251 0.165c0.165 0.086 0.335 0.086 0.5 0l8 -3.835c0.165 -0.086 0.165 -0.165 0 -0.251l-0.251 -0.165c-0.165 -0.086 -0.335 -0.086 -0.5 0l-8 3.835C120.085 77.085 120.085 77.165 120.251 77.25z"/><path class="st1" d="M132.585 77.335l0.251 -0.165c0.165 -0.086 0.165 -0.165 0 -0.251l-7.165 -3.835c-0.086 -0.086 -0.335 -0.086 -0.5 0L124.999 73.249c-0.165 0.086 -0.165 0.165 0 0.251l7.165 3.835C132.25 77.415 132.5 77.415 132.585 77.335z"/><path class="st1" d="M135.5 77.415l0.335 -0.165c0.165 -0.086 0.165 -0.165 0 -0.251l-7 -3.915c-0.086 -0.086 -0.335 -0.086 -0.5 0l-0.335 0.165c-0.165 0.086 -0.165 0.165 0 0.251l7 3.915C135.165 77.501 135.334 77.501 135.5 77.415z"/></g><g><path class="st1" d="M115.751 82.585l0.335 0.165c0.165 0.086 0.416 0.086 0.585 0l9.165 -4.165c0.165 -0.086 0.165 -0.165 0 -0.251l-0.335 -0.165c-0.165 -0.086 -0.416 -0.086 -0.585 0l-9.165 4.165C115.665 82.415 115.665 82.5 115.751 82.585z"/><path class="st1" d="M118.916 82.916l0.335 0.165c0.165 0.086 0.416 0.086 0.585 0l9.665 -4.415c0.165 -0.086 0.165 -0.165 0 -0.251L129.165 78.251c-0.165 -0.086 -0.416 -0.086 -0.585 0l-9.665 4.415C118.751 82.751 118.751 82.834 118.916 82.916z"/><path class="st1" d="M134 82.999l0.335 -0.165c0.165 -0.086 0.165 -0.165 0 -0.251l-8.75 -4.415c-0.165 -0.086 -0.416 -0.086 -0.585 0L124.665 78.334c-0.165 0.086 -0.165 0.165 0 0.251l8.75 4.415C133.585 83.085 133.834 83.085 134 82.999z"/><path class="st1" d="M137.415 83.085l0.335 -0.165c0.165 -0.086 0.165 -0.165 0 -0.251l-8.5 -4.5c-0.165 -0.086 -0.416 -0.086 -0.585 0L128.335 78.334c-0.165 0.086 -0.165 0.165 0 0.251l8.5 4.5C137 83.165 137.25 83.165 137.415 83.085z"/></g></g></svg>
                </div>
                <div>
                    @if (Route::has('login'))
                    <div >
                        @auth
                        <button style="display:flex; justify-content:center;background-color:#1C3F89; color:white; padding:20px; font-size: 1.2rem;" >
                            <a href="{{ url('/dashboard') }}" class="text-md text-white dark:text-white underline">Dashboard</a>

                        </button>
                        @else
                        <button
                        
                        style="display:flex; justify-content:center;background-color:#1C3F89; color:white; padding:20px; font-size: 1.2rem;" 
                                          type="submit">
                                      <a href="{{route('login') }}">Login</a>   
                                        </button>
    
                            {{-- @if (Route::has('register'))
                               <button style="display:flex; justify-content:center;background-color:#1C3F89; color:white; padding:20px; font-size: 1.2rem;" >
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                </button> 
                            @endif --}}
                        @endauth
                    </div>
                @endif
                
                </div>
            </div>
            



        </div>
    </body>
</html>
