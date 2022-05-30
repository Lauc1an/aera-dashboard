<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="noindex,nofollow">
        <title>{{ $title }} | Panel de Administración | {{ config('app.name', 'Laravel') }}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        @livewireStyles
        {{-- @stack('styles') --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            {{-- <livewire:admin.includes.navbar /> --}}
            {{-- @include('admin.includes.aside') --}}
            {{ $slot }}
            {{-- @include('admin.includes.footer') --}}
        </div>
        @livewireScripts
        {{-- @stack('script') --}}
    </body>
</html>
