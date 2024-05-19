<nav class="fixed top-0 left-0 right-0 z-10 flex items-center bg-white  dark:bg-zinc-800 print:hidden dark:border-zinc-700 ltr:pr-6 rtl:pl-6">
        
    <div class="flex justify-between w-full">
        <div class="flex items-center topbar-brand">
            <div class="hidden lg:flex navbar-brand items-center justify-between shrink px-6 h-[70px]  ltr:border-r rtl:border-l bg-[#fbfaff] border-gray-50 dark:border-zinc-700 dark:bg-zinc-800 shadow-none">
                <a href="#" class="flex items-center text-lg flex-shrink-0 font-bold dark:text-white leading-[69px]">
                    <img src="assets/logo-abonie.png" alt="" class="inline-block w-6 h-6 align-middle ltr:xl:mr-2 rtl:xl:ml-2">
                    <span class="hidden font-bold text-gray-700 align-middle xl:block dark:text-gray-100 leading-[69px]">Minia</span>
                </a>
            </div>
            <button type="button" class="group-data-[sidebar-size=sm]:border-b border-b border-[#e9e9ef] dark:border-zinc-600 dark:lg:border-transparent lg:border-transparent  group-data-[sidebar-size=sm]:border-[#e9e9ef] group-data-[sidebar-size=sm]:dark:border-zinc-600 text-gray-800 dark:text-white h-[70px] px-4 ltr:-ml-[52px] rtl:-mr-14 py-1 vertical-menu-btn text-16" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

        </div>
        <div class="flex justify-between w-full items-center border-b border-[#e9e9ef] dark:border-zinc-600 ltr:pl-6 rtl:pr-6">
            <div>
                <form class="hidden app-search xl:block">
                    <div class="relative inline-block">
                        <input type="text" class="pl-4 pr-[40px] border-0 rounded bg-[#f8f9fa] dark:bg-[#363a38] focus:ring-0 text-13 placeholder:text-13 dark:placeholder:text-gray-200 dark:text-gray-100  max-w-[223px]" placeholder="Search...">
                        <button class="py-1.5 px-2.5 w-9 h-[34px] text-white bg-violet-500 inline-block absolute ltr:right-1 top-1 rounded shadow shadow-violet-100 dark:shadow-gray-900 rtl:left-1 rtl:right-auto" type="button"><i class="align-middle bx bx-search-alt"></i></button>
                    </div>
                </form>
            </div>
            <div class="flex">
                <div>
                    <div class="relative block dropdown sm:hidden">
                        <button type="button" class="text-xl px-4 h-[70px] text-gray-600 dark:text-gray-100 dropdown-toggle" data-dropdown-toggle="navNotifications">
                            <i data-feather="search" class="w-5 h-5"></i>
                        </button>

                        <div class="absolute top-0 z-50 hidden px-4 mx-4 list-none bg-white border rounded shadow  dropdown-menu -left-36 w-72 border-gray-50 dark:bg-zinc-800 dark:border-zinc-600 dark:text-gray-300" id="navNotifications">
                            <form class="py-3 dropdown-item" aria-labelledby="navNotifications">
                                <div class="m-0 form-group">
                                    <div class="flex w-full">
                                        <input type="text" class="border-gray-100 dark:border-zinc-600 dark:text-zinc-100 w-fit" placeholder="Search ..." aria-label="Search Result">
                                        <button class="text-white border-l-0 border-transparent rounded-l-none btn btn-primary bg-violet-500" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="button" class="light-dark-mode text-xl px-3 h-[70px] text-gray-600 dark:text-gray-100 hidden sm:block ">
                        <i data-feather="moon" class="block w-5 h-5 dark:hidden"></i>
                        <i data-feather="sun" class="hidden w-5 h-5 dark:block"></i>
                    </button>
                </div>
                <div>
                    <div class="relative dropdown">
                        <button type="button" class="flex items-center px-3 py-2 h-[70px] border-x border-gray-50 bg-gray-50/30  dropdown-toggle dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <img class="border-[3px] border-gray-700 dark:border-zinc-400 rounded-full w-9 h-9 ltr:xl:mr-2 rtl:xl:ml-2" src="assets/logo-abonie.png" alt="Header Avatar">
                            <span class="hidden font-medium xl:block">Shawn L.</span>
                            <i class="hidden align-bottom mdi mdi-chevron-down xl:block"></i>
                        </button>
                        <div class="absolute top-0 z-50 hidden w-40 list-none bg-white dropdown-menu dropdown-animation rounded shadow  dark:bg-zinc-800" id="profile/log">
                            <div class="border border-gray-50 dark:border-zinc-600" aria-labelledby="navNotifications">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="block px-3 py-2 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50" href="apps-contacts-profile.html">
                                        <i class="mr-1 align-middle mdi mdi-face-man text-16"></i> Profile
                                    </a>
                                </div>
                                <hr class="border-gray-50 dark:border-gray-700">
                                <div class="dropdown-item dark:text-gray-100">
                                    <a class="block p-3 hover:bg-gray-50/50 dark:hover:bg-zinc-700/50" href="logout.html">
                                        <i class="mr-1 align-middle mdi mdi-logout text-16"></i> Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>