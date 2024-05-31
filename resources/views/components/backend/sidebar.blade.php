<!-- ========== Left Sidebar Start ========== -->
<div
    class="vertical-menu fixed bottom-0 top-[70px] z-10 h-screen border-gray-50 bg-slate-50 ltr:left-0 ltr:border-r rtl:right-0 rtl:border-l dark:border-neutral-700 dark:bg-zinc-800 print:hidden">

    <div data-simplebar class="h-full">
        <!--- Sidemenu -->
        <div class="metismenu pb-10 pt-2.5" id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul id="side-menu">
                <li class="block cursor-default px-5 py-3 text-xs font-medium leading-[18px] text-gray-500 group-data-[sidebar-size=sm]:hidden"
                    data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}"
                        class="block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                        <i data-feather="home" fill="#545a6d33"></i>
                        <span data-key="t-dashboard"> Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                        <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                        <span data-key="t-apps"> Presave</span>
                    </a>
                    <ul>
                        <li>
                            <a href="app-calendar.html"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Calendar</a>
                        </li>
                        <li>
                            <a href="app-chat.html"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Chat</a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="nav-menu block py-[6.4px] pl-[52.8px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                                <span data-key="t-apps">Email</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-email-inbox.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Inbox</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Read
                                        Email</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="nav-menu block py-[6.4px] pl-[52.8px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                                <span data-key="t-apps">Invoices</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-invoices-list.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Invoice
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-invoices-detail.html"
                                        class="block py-2 pl-14 pr-4 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Invoice
                                        Detail</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="nav-menu block py-[6.4px] pl-[52.8px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                                <span data-key="t-apps">Contacts</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-contacts-grid.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">User
                                        Grid</a>
                                </li>
                                <li>
                                    <a href="apps-contacts-list.html"
                                        class="block py-2 pl-14 pr-4 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">User
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-contacts-profile.html"
                                        class="block py-2 pl-14 pr-4 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Profile</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false"
                                class="flex items-center justify-between py-[6.4px] pl-[52.8px] pr-6 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                                <span data-key="t-apps">Blog</span>
                                <span
                                    class="text-10 badge rounded-full bg-red-50 px-2 py-0.5 text-end font-medium text-red-400 group-data-[sidebar-size=sm]:hidden">New</span>
                            </a>
                            <ul>
                                <li>
                                    <a href="apps-blog-grid.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Blog
                                        Grid</a>
                                </li>
                                <li>
                                    <a href="apps-blog-list.html"
                                        class="block py-2 pl-14 pr-4 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Blog
                                        List</a>
                                </li>
                                <li>
                                    <a href="apps-blog-detail.html"
                                        class="block py-2 pl-14 pr-4 text-[13px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Blog
                                        Details</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                        <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                        <span data-key="t-apps"> Biolink</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('biolink.index') }}"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">List
                                biolink</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">List
                                link Active</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">List
                                link banned</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" aria-expanded="false"
                        class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                        <i data-feather="grid" class="align-middle" fill="#545a6d33"></i>
                        <span data-key="t-apps"> Shortlink</span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('short.index') }}"
                                class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Manage
                                Shortlinks</a>
                        </li>
                    </ul>
                </li>


                @can('admin.view')
                    <li class="mt-2 cursor-default px-5 py-3 text-xs font-medium leading-[18px] text-gray-500 group-data-[sidebar-size=sm]:hidden"
                        data-key="t-elements">Setting</li>
                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                            <i data-feather="briefcase" fill="#545a6d33"></i>
                            <span data-key="t-compo">Users Management</span>
                        </a>
                        <ul>
                            @can('admin.view')
                                <li>
                                    <a href="{{ route('users.index') }}"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">All
                                        User</a>
                                </li>
                            @endcan

                            @can('admin.view')
                                <li>
                                    <a href="buttons.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">User
                                        Active</a>
                                </li>
                            @endcan

                            @can('admin.view')
                                <li>
                                    <a href="cards.html"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">User
                                        banned</a>
                                </li>
                            @endcan


                        </ul>
                    </li>
                @endcan

                @can('role.view')
                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                            <i data-feather="briefcase" fill="#545a6d33"></i>
                            <span data-key="t-compo">Roles Management</span>
                        </a>
                        <ul>
                            @can('role.view')
                                <li>
                                    <a href="{{ route('roles.index') }}"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">All
                                        Roles</a>
                                </li>
                            @endcan

                        </ul>
                    </li>
                @endcan
                @can('admin.view')
                    <li>
                        <a href="javascript: void(0);" aria-expanded="false"
                            class="nav-menu block px-6 py-2.5 text-sm font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">
                            <i data-feather="briefcase" fill="#545a6d33"></i>
                            <span data-key="t-compo">Plaftform Management</span>
                        </a>
                        <ul>
                            @can('admin.view')
                                <li>
                                    <a href="{{ route('platform.biolink.index') }}"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Platform
                                        Biolink</a>
                                </li>
                            @endcan

                            @can('admin.view')
                                <li>
                                    <a href="{{ route('platform.presave.index') }}"
                                        class="block py-[6.4px] pl-[52.8px] pr-6 text-[13.5px] font-medium text-gray-950 transition-all duration-150 ease-linear hover:text-violet-500 dark:text-gray-300 dark:hover:text-white dark:active:text-white">Platform
                                        Presave</a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
