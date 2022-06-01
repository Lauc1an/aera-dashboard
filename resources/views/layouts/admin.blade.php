<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <title>{{ $title }} | Panel de Administración | {{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        @livewireStyles
        {{-- @stack('styles') --}}
        <script src="{{ asset('js/admin.js') }}" defer></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            <x-admin.navbar />
            <x-admin.aside />
            {{ $slot }}
            <x-admin.footer />
        </div>
        @livewireScripts
        {{-- @stack('script') --}}
    </body>
</html>
