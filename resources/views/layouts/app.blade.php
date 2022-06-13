<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="SKF Exponor 2022">
        <meta property="og:image" content="{{ config('app.url', '').'/src/favicon.png' }}">


        <link rel="icon" type="image/x-icon" href="{{config('app.url')}}/src/favicon.png">

        <title>SKF Exponor 2022</title>

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

            //pregunta 4
            $('input[name="presupuesto"]').change(function(){
                
                $('#p4r1').attr("src", $('#p4r1').attr("src").replace('-.png', '.png'))
                $('#p4r2').attr("src", $('#p4r2').attr("src").replace('-.png', '.png'))
                $('#p4r3').attr("src", $('#p4r3').attr("src").replace('-.png', '.png'))

                
                $('#p4r'+$(this).val()).attr("src", $('#p4r'+$(this).val()).attr("src").replace('.png', '-.png'))
                
                console.log($(this).val());
            })

            //pregunta 5
            $('input[name="relacionskf"]').change(function(){
                
                $('.dp5').removeClass('bg-dark')     // attr("src", $('#dp5r1').attr("src").replace('-.png', '.png'))
                $('.dp5').removeClass('text-ligth')    // attr("src", $('#dp5r1').attr("src").replace('-.png', '.png'))
                $('.dp5').addClass('bg-ligth')       // attr("src", $('#dp5r1').attr("src").replace('-.png', '.png'))
                $('.dp5').addClass('text-dark')      // attr("src", $('#dp5r1').attr("src").replace('-.png', '.png'))
                // $('#dp5r2').removeClass('bg-dark')    // attr("src", $('#dp5r2').attr("src").replace('-.png', '.png'))
                // $('#dp5r3').removeClass('bg-dark')    // attr("src", $('#dp5r3').attr("src").replace('-.png', '.png'))
                // $('#dp5r4').removeClass('bg-dark')    // attr("src", $('#dp5r4').attr("src").replace('-.png', '.png'))

                
                $('#dp5r'+$(this).val()).addClass('bg-dark')
                $('#dp5r'+$(this).val()).addClass('text-ligth')
                
                console.log($(this).val());
            })



            //pregunta 6
            $('.productos_feria').change(function(){
                // $('#div-productosferia_servicio').attr() $(this).attr('id')
                var id = $(this).attr('id')
                if($(this).is(":checked")){
                    $('#div-'+id).removeClass('bg-ligth text-dark')
                    $('#div-'+id).addClass('bg-dark text-ligth')
                } else {
                    $('#div-'+id).removeClass('bg-dark text-ligth')
                    $('#div-'+id).addClass('bg-ligth text-dark')
                }
                
            })


            $('input[name="tipocontacto"]').change(function(){
                
                $('.div-contacto').removeClass('bg-ligth')
                $('.div-contacto').addClass('bg-dark')

                $('#div-'+$(this).attr('id')).removeClass('bg-dark')
                $('#div-'+$(this).attr('id')).addClass('bg-ligth')
                
                console.log($(this).val());
            })


        </script>
    </body>
</html>
