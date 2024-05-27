<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="items-center justify-between px-[2px] md:flex">
            <h4 class="mb-sm-0 mb-2 grow text-[18px] font-medium text-gray-800 dark:text-gray-100 md:mb-0">Dashboard</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="{{ url('dashboard') }}"
                            class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="far fa-angle-right text-13 align-middle font-semibold text-gray-600 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="{{ route('dashboard') }}"
                                class="text-sm font-medium text-gray-500 hover:text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-100 dark:hover:text-white ltr:md:ml-2 rtl:md:mr-2">Dashboard</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-6 gap-y-0 md:grid-cols-2 2xl:grid-cols-4 2xl:gap-6">
        <x-backend.dashboard.statistik title="User" total="35678" class="bx bx-user" />
        <x-backend.dashboard.statistik title="Short Link" total="358k" class="bx bx-link" />
        <x-backend.dashboard.statistik title="Bio Link" total="378k" class="bx bx-news" />
        <x-backend.dashboard.statistik title="Presave Link" total="678k" class="bx bx-music" />
    </div>

</x-backend.dashboard-layout>
