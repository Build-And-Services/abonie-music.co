<x-backend.dashboard-layout :blank="true">
    <div class="container-fluid">
        <div class="h-screen md:overflow-hidden bg-gray-800">
            <div class="flex items-center justify-center h-full relative">
                <div class="relative z-50">
                    <div class="p-10 bg-white xl:p-12 rounded-md dark:bg-zinc-800 mx-auto shadow-xl">
                        <div class="flex flex-col">
                            <div class="mx-auto mb-2">
                                <a href="/" class="">
                                    <span class="text-xl font-medium align-middle ltr:ml-1.5 rtl:mr-1.5 dark:text-white">Abonie Digital Musik</span>
                                </a>
                            </div>

                            <div class="my-auto">
                                <div class="text-center">
                                    <h5 class="font-medium text-gray-700 dark:text-gray-100">Register Account !</h5>
                                    <p class="mt-2 mb-4 text-gray-500 dark:text-gray-100/60">Sign up to continue to Music.</p>
                                </div>

                                <form class="pt-2" action="/">
                                    <div class="mb-4">
                                        <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Email</label>
                                        <input type="email" class="w-full py-1.5 border-gray-50 rounded placeholder:text-13 bg-gray-50/30 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60 focus:ring focus:ring-violet-500/20 focus:border-violet-100 text-13" id="email" placeholder="Enter email">
                                    </div>
                                    <div class="mb-4">
                                        <label class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Username</label>
                                        <input type="text" class="w-full py-1.5 border-gray-50 rounded placeholder:text-13 bg-gray-50/30 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60 focus:ring focus:ring-violet-500/20 focus:border-violet-100 text-13" id="username" placeholder="Enter username">
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label class="block mb-2 font-medium text-gray-600 dark:text-gray-100">Password</label>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <input type="password" class="w-full py-1.5 border-gray-50 rounded ltr:rounded-r-none rtl:rounded-l-none bg-gray-50/30 placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60 focus:ring focus:ring-violet-500/20 focus:border-violet-100" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                            <button class="px-4 border rounded border-gray-50 bg-gray-50 ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="flex">
                                            <div class="flex-grow-1">
                                                <label class="block mb-2 font-medium text-gray-600 dark:text-gray-100">Confirmation Password</label>
                                            </div>
                                        </div>
                                        <div class="flex">
                                            <input type="password" class="w-full py-1.5 border-gray-50 rounded ltr:rounded-r-none rtl:rounded-l-none bg-gray-50/30 placeholder:text-13 text-13 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-gray-100 dark:placeholder:text-zinc-100/60 focus:ring focus:ring-violet-500/20 focus:border-violet-100" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon2">
                                            <button class="px-4 border rounded border-gray-50 bg-gray-50 ltr:rounded-l-none rtl:rounded-r-none ltr:border-l-0 rtl:border-r-0 dark:bg-zinc-700 dark:border-zinc-600 dark:text-gray-100" type="button" id="password-addon2"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <button class="w-full py-2 text-white border-transparent shadow-md btn bg-violet-500 w-100 waves-effect waves-light shadow-violet-200 dark:shadow-zinc-600" type="submit">Sign Up</button>
                                    </div>
                                </form>

                                <div class="mt-12 text-center">
                                    <p class="text-gray-500 dark:text-gray-100">Already Have Account ? <a href="{{ route('login') }}" class="font-semibold text-violet-500"> Signin Now </a> </p>
                                </div>
                            </div>


                            <div class="text-center ">
                                <p class="relative text-gray-500 dark:text-gray-100">©
                                    <script>document.write(new Date().getFullYear())</script>2024 Abonie. Crafted with <i class="text-red-400 mdi mdi-heart"></i> by BuildAndService
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="absolute top-0 left-0 w-full h-full overflow-hidden bg-bubbles animate-square">
                    <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[10%] "></li>
                    <li class="h-28 w-28 rounded-3xl bg-white/10 absolute left-[20%]"></li>
                    <li class="h-10 w-10 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                    <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[40%]"></li>
                    <li class="h-24 w-24 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                    <li class="h-32 w-32 rounded-3xl bg-white/10 absolute left-[70%]"></li>
                    <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[32%]"></li>
                    <li class="h-20 w-20 rounded-3xl bg-white/10 absolute left-[55%]"></li>
                    <li class="h-12 w-12 rounded-3xl bg-white/10 absolute left-[25%]"></li>
                    <li class="h-36 w-36 rounded-3xl bg-white/10 absolute left-[90%]"></li>
                </ul>
            </div>
        </div>
    </div>
</x-backend.dashboard-layout>
