@props(['blank' => false])

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Presave - Dashboard' }}</title>

    <link rel="stylesheet" href="{{ asset('assets-dashboard/css/tailwind2.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('stylesheet')
    <style>
        .dt-buttons .dt-button {
            padding: 10px 20px;
        }

        .dt-buttons .dt-button:hover {
            background: #8f90a3;
        }

        .dt-buttons button:last-child {
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .dt-button-collection div {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }


        .dataTables_empty {
            text-align: center;
            padding: 20px 0;
            border: 1px solid rgb(230, 230, 235) !important;
        }

        :is([data-mode=dark] .dataTables_empty) {
            --tw-border-opacity: 1 !important;
            border: 1px solid rgb(63, 67, 65) !important;
        }
    </style>
</head>

<body data-mode="light" data-sidebar-size="lg" class="group">
    @if (!$blank)
        <x-backend.sidebar />
        <x-backend.navbar />

        <div class="main-content group-data-[sidebar-size=sm]:ml-[70px]">
            <div class="min-h-screen page-content dark:bg-zinc-700">
                {{ $slot }}

                <!-- Footer Start -->
                <footer
                    class="absolute bottom-0 left-0 right-0 px-5 py-5 bg-white border-t footer border-gray-50 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-200">
                    <div class="grid grid-cols-2 text-gray-500 dark:text-zinc-100">
                        <div class="grow">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> buildandservice
                        </div>
                        <div class="hidden md:inline-block text-end">Design & Develop by <a
                                href="https://buildandservice.tech/" class="underline text-violet-500">Build And
                                Service</a></div>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Required datatable js -->
    <script src="{{ asset('assets-dashboard/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ asset('assets-dashboard/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/pdfmake/build/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ asset('assets-dashboard/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets-dashboard/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script>

    <!-- Datatable init js -->
    <script src="{{ asset('assets-dashboard/js/pages/datatables.init.js') }}"></script>
    <script src="{{ asset('assets-dashboard/js/pages/nav&tabs.js') }}"></script>

    <script src="{{ asset('assets-dashboard/js/app.js') }}"></script>

</body>

</html>
