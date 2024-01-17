<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
{{--        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">--}}

        <!-- Styles -->
        @livewireStyles

       <!-- Scripts -->
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="icon" href="{{ asset('web/images/favicon/favicon.png') }}" type="image/x-icon">
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap"
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/date-picker.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/magnific-popup.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}" media="screen" id="color">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/css/tour.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/js/ckeditor/skins/moono-lisa/editore8ef.css?t=HBDD') }}">
        <link rel="stylesheet" type="text/css"
              href="{{ asset('web/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/js/ckeditor/plugins/scayt/dialogs/dialog.css') }}">
        <link rel="stylesheet" type="text/css"
              href="{{ asset('web/js/ckeditor/plugins/tableselection/styles/tableselection.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('web/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css') }}">
        <link rel="stylesheet" type="text/css"
              href="{{ asset('web/js/ckeditor/plugins/copyformatting/styles/copyformatting.css') }}">

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
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
        <script src="{{ asset('web/js/jquery-3.7.1.min.js') }}"></script>
        <script src="{{ asset('web/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('web/js/popper.min.js') }}"></script>
        <script src="{{ asset('web/js/tippy-bundle.iife.min.js') }}"></script>
        <script src="{{ asset('web/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('web/js/switchery.js') }}"></script>
        <script src="{{ asset('web/js/easytimer.min.js') }}"></script>
        <script src="{{ asset('web/js/index.js') }}"></script>
        <script src="{{ asset('web/js/feather-icon/feather.min.js') }}"></script>
        <script src="{{ asset('web/js/feather-icon/feather-icon.js') }}"></script>

        {{-- <script src="{{ asset('web/js/ckeditor/ckeditor.js')}}"></script>
        <script src="{{ asset('web/js/ckeditor/styles.js')}}"></script>
        <script src="{{ asset('web/js/ckeditor/adapters/jquery.js')}}"></script>
        <script src="{{ asset('web/js/ckeditor/ckeditor.custom.js')}}"></script> --}}

        <script src="{{ asset('web/js/date-picker/datepicker.js') }}"></script>
        <script src="{{ asset('web/js/date-picker/datepicker.en.js') }}"></script>
        <script src="{{ asset('web/js/date-picker/datepicker.custom.js') }}"></script>
        <script src="{{ asset('web/js/tour/intro.js') }}"></script>
        <script src="{{ asset('web/js/tour/intro-init.js') }}"></script>
        <script src="{{ asset('web/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('web/js/zoom-gallery.js') }}"></script>
        <script src="{{ asset('web/js/script.js') }}"></script>
    </body>
</html>
