<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Corsy') }} - Propriedades Digitais</title>

        <!-- bootstrap 4.3.1 -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
        <!-- styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">

        <!-- simplebar styles -->
        <link rel="stylesheet" href="{{ asset('assets/css/vendor/simplebar.css')}}">
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- favicon -->
        <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>

        <!-- /PAGE LOADER -->
        @livewire('navigation-menu')

        @livewire('header-menu')

       
        <!-- CONTENT GRID -->
        <div class="content-grid">
            @if (isset($header))
                {{ $header }}
            @endif
            
            {{ $slot }}
        </div>

        @stack('modals')

        @livewireScripts
        <script>
            $('#avatar').on('click', function() {
                $('#photos').trigger('click');
            });

            $('#submit').on('click', function() {
                $('#button').trigger('click');
            });

          </script>
    <!-- app -->
    <script src="{{ asset('assets/js/app.bundle.min.js') }}"></script>

    </body>
</html>
