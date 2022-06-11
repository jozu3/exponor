<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link rel="stylesheet" href="{{config('app.url')}}{{ mix('css/app.css') }}"> --}}
        <link rel="stylesheet" href="{{config('app.url')}}{{ '/css/output.css' }}">
        <link rel="stylesheet" href="{{config('app.url')}}{{ '/css/styles.css' }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{config('app.url')}}{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-dark">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-banner shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script>
                $('.radio-p4').click(function() {
                    if($(this).attr("src").indexOf("-.png") >= 0 ){
                        $(this).attr("src", $(this).attr("src").replace('-.png', '.png') ) 
                    } else {
                        $(this).attr("src", $(this).attr("src").replace('.png', '-.png') ) 
                    }
                });

        </script>
    </body>
</html>
