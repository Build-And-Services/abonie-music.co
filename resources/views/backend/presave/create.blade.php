<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="items-center justify-between px-[2px] md:flex">
            <div class="flex items-center justify-center gap-0">
                <i
                    class="far fa-angle-left text-13 align-middle font-semibold text-gray-600 rtl:rotate-180 dark:text-zinc-100"></i>
                <a href="{{ route('presave.index') }}"
                    class="text-sm font-medium text-gray-500 hover:text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-100 dark:hover:text-white ltr:md:ml-2 rtl:md:mr-2">
                    Back
                </a>
            </div>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="far fa-angle-right text-13 align-middle font-semibold text-gray-600 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="#"
                                class="text-sm font-medium text-gray-500 hover:text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-100 dark:hover:text-white ltr:md:ml-2 rtl:md:mr-2">Presave</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <x-backend.alert-response />
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:border-zinc-600 dark:bg-zinc-800">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="text-15 mb-1 text-lg font-bold text-gray-700 dark:text-gray-100">Add new presave</h6>
                </div>
                <div class="card-body relative overflow-x-auto">
                    <div class="grid grid-cols-12 gap-6 py-5">
                        <div class="col-span-12 md:col-span-7">
                            <div class="mx-auto flex gap-4">
                                <div class="relative w-[200px] rounded-lg border-2 border-dashed border-gray-300 hover:cursor-pointer hover:bg-gray-100"
                                    id="dropzone">
                                    <input type="file"
                                        class="absolute inset-0 z-50 h-full w-full opacity-0 hover:cursor-pointer"
                                        id="file-upload" />
                                    <div class="py-6 text-center" id="start-img">
                                        <img class="mx-auto h-12 w-12"
                                            src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">

                                        <h3 class="mt-2 text-sm font-medium text-gray-900">
                                            <label for="file-upload" class="relative cursor-pointer">
                                                <span>Upload Image</span>
                                            </label>
                                        </h3>
                                        <p class="mt-1 text-xs text-gray-500">
                                            PNG, JPG up to 5MB
                                        </p>
                                    </div>

                                    <img src="" class="z-50 hidden w-full" id="preview">
                                    <div class="absolute right-0 top-0 hidden" id="close-button">
                                        <button
                                            class="rounded-full bg-gray-200 text-gray-500 hover:text-gray-700 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div
                                    class="inline-flex w-full max-w-2xl flex-col items-start gap-1.5 stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700">
                                    <label
                                        class="whitespace-nowrap text-base font-medium text-black transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                        for="title">Link Title</label>
                                    <div class="relative w-full">
                                        <input
                                            class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                            id="title" placeholder="Song, Albums, Artist">
                                    </div>
                                    <label
                                        class="whitespace-nowrap text-base font-medium text-black transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                        for="title">Link URL</label>
                                    <div class="flex w-full">
                                        <span
                                            class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-100 px-3 text-sm font-medium text-black dark:border-gray-600 dark:bg-gray-600 dark:text-gray-400">
                                            music.co/
                                        </span>
                                        <input
                                            class="mb-0.5 h-full w-full rounded-r-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out focus:border-blue-600 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400"
                                            id="title" placeholder="mylink">
                                    </div>
                                </div>
                            </div>
                            <div class="platform-links">
                                <h2 class="mb-4 mt-8 text-lg font-bold">Platform Links:</h2>
                                <div class="card relative grid grid-cols-12 content-center gap-5 px-4 py-5">
                                    <div class="col-span-3">
                                        <img src="https://li.sten.to/images/music-platforms/spotify.svg" alt=""
                                            class="h-full w-32">
                                    </div>
                                    <div
                                        class="col-span-6 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="title">URL</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="title" placeholder="Song, Albums, Artist">
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-3 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="title">Button Text</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="title" placeholder="Listen">
                                        </div>
                                    </div>
                                    <div class="absolute right-0 top-0 p-1">
                                        <button>
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg" stroke="#a8a8a8">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round"
                                                    stroke-linejoin="round"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path
                                                        d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17"
                                                        stroke="#808080" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button type="button"
                                    class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-gray-500 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                                    Add Platform
                                </button>
                            </div>
                            <div class="theme-links">
                                <h2 class="mb-3 mt-8 text-lg font-bold">Style Links:</h2>
                                <div class="flex flex-col gap-4">
                                    <div class="relative">
                                        <input class="peer hidden" id="radio_1" type="radio" name="radio"
                                            checked />
                                        <label
                                            class="flex h-full cursor-pointer flex-col rounded-md p-4 shadow-slate-100 ring-gray-400 peer-checked:text-white peer-checked:ring-2"
                                            for="radio_1">
                                            <div
                                                class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:rounded-lg">
                                                <img src="https://li.sten.to/images/music-platforms/youtube.svg"
                                                    alt="" class="w-32">
                                                <a href="#_"
                                                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                                                    Listen
                                                </a>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="relative">
                                        <input class="peer hidden" id="radio_2" type="radio" name="radio" />


                                        <label
                                            class="flex h-full cursor-pointer flex-col rounded-md p-4 shadow-slate-100 ring-gray-400 peer-checked:text-white peer-checked:ring-2"
                                            for="radio_2">
                                            <div
                                                class="group col-span-12 flex h-[3.8rem] cursor-pointer items-center justify-between rounded-full border bg-white px-4 shadow-lg transition-all duration-300">
                                                <img src="https://li.sten.to/images/music-platforms/spotify.svg"
                                                    alt="" class="w-32">
                                                <a href="#_"
                                                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                                                    Listen
                                                </a>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="relative">
                                        <input class="peer hidden" id="radio_3" type="radio" name="radio" />


                                        <label
                                            class="flex h-full cursor-pointer flex-col rounded-md p-4 shadow-slate-100 ring-gray-400 peer-checked:text-white peer-checked:ring-2"
                                            for="radio_3">
                                            <div class="group relative col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between rounded-lg border border-black bg-white px-4 transition-all duration-300"
                                                style="box-shadow: 6px 6px 0px #000">
                                                <img src="https://li.sten.to/images/music-platforms/apple-music.svg"
                                                    alt="" class="w-32">
                                                <a href="#_"
                                                    class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                                                    Listen
                                                </a>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                                <button
                                    class="my-8 w-full rounded-lg bg-gray-500 px-4 py-2 text-base font-bold text-white transition duration-300 hover:bg-gray-600">Generate
                                    Link</button>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-5">
                            <div class="mx-auto"
                                style="width: 350px;
                                max-width: 350px;
                                border: 15px solid #222;
                                border-radius: 40px;
                                height: 723px;
                                max-height: 723px;
                                transform-origin: right top;
                                transform-origin: 0 0;
                                background-color: #222;
                                overflow: hidden;">
                                <iframe src="{{ route('preview.presave.index') }}" height="100%"
                                    width="100%"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            var input = document.getElementById('file-upload');

            input.addEventListener('change', e => {
                var file = e.target.files[0];
                displayPreview(file);
            });

            let buttonClose = document.getElementById('close-button')
            var preview = document.getElementById('preview');
            let startPreview = document.getElementById('start-img')



            function displayPreview(file) {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    var preview = document.getElementById('preview');
                    preview.src = reader.result;
                    preview.classList.remove('hidden');
                    buttonClose.classList.remove('hidden')
                    startPreview.classList.add('hidden');
                    input.classList.add('hidden')

                };
            }

            buttonClose.addEventListener('click', e => {
                preview.src = ''
                preview.classList.add('hidden')
                buttonClose.classList.add('hidden')
                startPreview.classList.remove('hidden')
                input.classList.remove('hidden')
            })
        </script>
    @endpush
</x-backend.dashboard-layout>
