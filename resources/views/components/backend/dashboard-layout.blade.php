<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Presave - Dashboard' }}</title>

    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/tailwind2.css') }}">
    @stack('stylesheet')
</head>
<body data-mode="light" data-sidebar-size="lg" class="group">
    <x-backend.sidebar/>
    <x-backend.navbar/>

    <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
        <div class="min-h-screen page-content dark:bg-zinc-700">
            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('assets-dashboard/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/simplebar/simplebar.min.js') }}"></script>
    <script  src="{{ asset('assets-dashboard/js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>