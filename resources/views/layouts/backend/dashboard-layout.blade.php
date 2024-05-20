@props(['notfound' => false])

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
<body data-mode="dark" data-sidebar-size="lg" class="group">
    @if (!$notfound)
        <x-backend.sidebar/>
        <x-backend.navbar/>

        <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
            <div class="min-h-screen page-content dark:bg-zinc-700">
                {{ $slot }}

                <!-- Footer Start -->
                <footer class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-500 dark:text-zinc-100">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> buildandservice
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a href="https://buildandservice.tech/" class="underline text-violet-500">Build And Service</a></div>
                
                    </div>
                </footer>
                <!-- end Footer -->    
            </div>
        </div>
        
    @else
        {{ $slot }}
    @endif


    <script src="{{ asset('assets-dashboard/libs/@popperjs/core/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/metismenujs/metismenujs.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/simplebar/simplebar.min.js') }}"></script>
    <script  src="{{ asset('assets-dashboard/js/app.js') }}"></script>

    @stack('scripts')
</body>
</html>