<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

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
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
