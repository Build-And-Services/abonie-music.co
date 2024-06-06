<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="md:flex items-center justify-between px-[2px]">
            <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Biolink</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="{{ route('dashboard') }}"
                            class="inline-flex items-center text-sm text-gray-600 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="{{ route('biolink.index') }}"
                                class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Biolink</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="font-semibold text-gray-800 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="{{ route('biolink.create') }}"
                                class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Create</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6 py-5">
        <div class="col-span-12 md:col-span-7">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="nav-tabs border-b-tabs">
                    <div class="flex pb-0 border-b card-body border-gray-50 dark:border-zinc-700">
                        <div class="w-full">
                            <ul class="flex nav" role="tablist">
                                <li class="nav-item">
                                    <a class="inline-block px-4 pb-3 font-medium active" href="javascript:void(0);"
                                        data-tw-toggle="tab" data-tw-target="all-tab1" role="tab">Information
                                        Biolink</a>
                                </li>
                                <li class="nav-item">
                                    <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                        data-tw-toggle="tab" data-tw-target="buy-tab1" role="tab">Links Socmed</a>
                                </li>
                                <li class="nav-item">
                                    <a class="inline-block px-4 pb-3 font-medium" href="javascript:void(0);"
                                        data-tw-toggle="tab" data-tw-target="sell-tab1" role="tab">Appareance</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="py-3">
                        <div class="tab-content">
                            <div class="tab-pane block" id="all-tab1" role="tabpanel">
                                <div class="px-3" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -12px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 12px;">
                                                        <form action="{{ route('biolink.update', $biolinks->id) }}"
                                                            method="post" id="form-information"
                                                            enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div
                                                                class="w-32 h-32 rounded-full bg-purple-600 relative mx-auto">
                                                                <input type="file" name="profile"
                                                                    class="opacity-0 w-full h-full rounded-full bg-gray-400 absolute"
                                                                    id="profile-input">
                                                                <div
                                                                    class="h-8 w-8 bottom-0 right-0 bg-purple-500 rounded-full absolute text-white flex justify-center items-center">
                                                                    <i class="bx bx-edit-alt"></i>
                                                                </div>
                                                                <img src="{{ asset($biolinks->photo) }}"
                                                                    class="w-32 h-32 object-cover rounded-full"
                                                                    alt="" id="img-preview">
                                                            </div>

                                                            <div class="grids grid-cols-12 mt-5">

                                                                <div class="mb-4">
                                                                    <label for="example-text-input"
                                                                        class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Name</label>
                                                                    <input
                                                                        class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100"
                                                                        type="text" name="name" id="name-input"
                                                                        value="{{ $biolinks->name }}">
                                                                </div>
                                                                <div class="mb-4">
                                                                    <label for="example-text-input"
                                                                        class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Description</label>
                                                                    <input
                                                                        class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100"
                                                                        type="text" name="description" type="text"
                                                                        name="name" id="description-input"
                                                                        value="{{ $biolinks->description }}">
                                                                </div>
                                                                <div class="mb-4">
                                                                    <div
                                                                        class="flex items-center border rounded bg-gray-50 dark:border-zinc-600 dark:bg-zinc-600">
                                                                        <div
                                                                            class="px-4 input-group-text dark:text-zinc-100">
                                                                            https://biolink.co.id/</div>
                                                                        <input type="text"
                                                                            class="w-full border-0 border-l border-gray-100 placeholder:text-sm focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700 dark:border-zinc-600 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                                                            value="{{ $biolinks->link }}"
                                                                            name="name" id="link-input"
                                                                            name="link">
                                                                    </div>
                                                                </div>
                                                                <div class="mb-4 w-full">
                                                                    <button id="button-submit"
                                                                        class="px-6 py-2 w-full rounded bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-800 hover:to-indigo-800 duration-500 transition-all text-white">
                                                                        Simpan
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="height: 276px; transform: translate3d(0px, 0px, 0px); display: none;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane hidden" id="buy-tab1" role="tabpanel">
                                <div class="px-3" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -12px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden;">
                                                    <div class="simplebar-content" style="padding: 0px 12px;">
                                                        <div class="w-full">


                                                            <h1
                                                                class="my-5 text-gray-400 flex items-center gap-2 text-lg font-semibold">
                                                                Social Links
                                                            </h1>

                                                            <div class="flex flex-col w-full gap-2" id="link-content">
                                                                <button
                                                                    class="px-6 py-2 mb-5 rounded bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-800 hover:to-indigo-800 duration-500 transition-all text-white w-full text-xl font-semibold"
                                                                    data-tw-target="#modal-add_link"
                                                                    data-tw-toggle="modal">
                                                                    <i class="bx bx-plus text-xl font-semibold"></i>
                                                                    Add Links
                                                                </button>
                                                                @foreach ($biolinks->linkable as $item)
                                                                    <a href="{{ $item->link }}"
                                                                        class="px-6 py-2 rounded-full border text-center border-violet-600 duration-500 transition-all text-violet-800 w-full text-xl font-semibold">
                                                                        {{ $item->title }}
                                                                    </a>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none; height: 276px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane hidden" id="sell-tab1" role="tabpanel">
                                <div class="px-3" data-simplebar="init">
                                    <div class="simplebar-wrapper" style="margin: 0px -12px;">
                                        <div class="simplebar-height-auto-observer-wrapper">
                                            <div class="simplebar-height-auto-observer"></div>
                                        </div>
                                        <div class="simplebar-mask">
                                            <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                                <div class="simplebar-content-wrapper"
                                                    style="height: auto; overflow: hidden scroll;">
                                                    <div class="simplebar-content" style="padding: 0px 12px;">
                                                        <h1
                                                            class="my-5 text-gray-400 flex items-center gap-2 text-lg font-semibold">
                                                            Background Color
                                                        </h1>

                                                        <div
                                                            class="grid !grid-cols-2 sm:!grid-cols-3 md:!grid-cols-4 gap-2">
                                                            <div
                                                                class="h-72 cursor-pointer bg-red-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-orange-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-yellow-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-green-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-blue-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-indigo-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer bg-purple-500 rounded-md flex flex-col justify-center items-center group hover:scale-105 duration-300">
                                                                <h1 class="hidden group-hover:block">Choose Me</h1>
                                                            </div>
                                                            <div
                                                                class="h-72 cursor-pointer border rounded-md flex flex-col justify-center items-center">

                                                                <svg xmlns="http://www.w3.org/2000/svg" width="21.207"
                                                                    height="21.207" viewBox="0 0 21.207 21.207">
                                                                    <defs>
                                                                        <style>
                                                                            .a {
                                                                                opacity: 0.5;
                                                                            }

                                                                            .b {
                                                                                fill: none;
                                                                                stroke: #414141;
                                                                                stroke-linecap: round;
                                                                                stroke-linejoin: round;
                                                                            }
                                                                        </style>
                                                                    </defs>
                                                                    <g class="a"
                                                                        transform="translate(-9.443 -8.819)">
                                                                        <path class="b"
                                                                            d="M6.722,4.5H22.278A2.222,2.222,0,0,1,24.5,6.722V22.278A2.222,2.222,0,0,1,22.278,24.5H6.722A2.222,2.222,0,0,1,4.5,22.278V6.722A2.222,2.222,0,0,1,6.722,4.5Z"
                                                                            transform="translate(5.443 4.819)" />
                                                                        <path class="b"
                                                                            d="M14.852,12.676A2.176,2.176,0,1,1,12.676,10.5,2.176,2.176,0,0,1,14.852,12.676Z"
                                                                            transform="translate(3.411 2.786)" />
                                                                        <path class="b"
                                                                            d="M25.227,20.683,19.687,15,7.5,27.5"
                                                                            transform="translate(4.716 1.818)" />
                                                                    </g>
                                                                </svg>
                                                                <h1>Upload Image</h1>
                                                                <input type="file" class="hidden">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <label for="example-text-input"
                                                                class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Background
                                                                Color
                                                                picker</label>
                                                            <input
                                                                class="h-10 p-1 text-sm text-gray-500 bg-transparent border border-gray-100 rounded focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 w-14"
                                                                type="color" value="#5156be"
                                                                id="example-color-input">
                                                        </div>
                                                        <h1
                                                            class="block mb-2 font-medium text-gray-700 dark:text-gray-100">
                                                            Text Color
                                                        </h1>
                                                        <input
                                                            class="h-10 p-1 text-sm text-gray-500 bg-transparent border border-gray-100 rounded focus:border focus:border-violet-500 focus:ring-0 dark:bg-zinc-700/50 dark:border-zinc-600 dark:text-zinc-100 w-14"
                                                            type="color" value="#5156be" id="example-color-input">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="simplebar-placeholder" style="width: auto; height: 448px;">
                                        </div>
                                    </div>
                                    <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                    </div>
                                    <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                        <div class="simplebar-scrollbar"
                                            style="transform: translate3d(0px, 0px, 0px); display: block; height: 276px;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
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
                <div id="preview" class="w-full h-full">
                </div>
            </div>
        </div>
    </div>


    <x-backend.modal.add-link-bio :biolink="$biolinks" />

    @push('scripts')
        {{-- information --}}
        <script>
            $(document).ready(function() {
                document.getElementById("preview").innerHTML =
                    '<iframe id="preview" src="{{ route('preview.biolink.index', $biolinks->id) }}" height="100%" width="100%"></iframe>';
            });

            function postAjax(formData) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route('biolink.update', $biolinks->id) }}', // Update with your route
                    contentType: 'multipart/form-data',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        // alert("ok");
                        document.getElementById("preview").innerHTML =
                            '<iframe id="previews" src="{{ route('preview.biolink.index', $biolinks->id) }}" height="100%" width="100%"></iframe>'
                    },
                });
            }

            document.getElementById('profile-input').addEventListener('change', function(event) {
                const input = event.target;
                if (input.files && input.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('img-preview').src = e.target.result;
                    };
                    reader.readAsDataURL(input.files[0]);
                }
                var formData = new FormData();
                formData.append('profile', input.files[0]);
                formData.append('name', $('#name-input').val());
                formData.append('description', $('#description-input').val());
                formData.append('link', $('#link-input').val());
                formData.append('_method', 'put');

                // Send AJAX request
                postAjax(formData)
            });
            $('#form-information').on('submit', function(e) {
                e.preventDefault();
                var formData = new FormData();
                formData.append('name', $('#name-input').val());
                formData.append('description', $('#description-input').val());
                formData.append('link', $('#link-input').val());
                formData.append('_method', 'put');

                postAjax(formData)
            });
        </script>

        {{-- link --}}
        <script>
            $('#link-form').on('submit', function(e) {
                e.preventDefault();
                var $form = $(this)
                var serializedData = $form.serialize();
                console.log(serializedData)
                $.ajax({
                    type: 'POST',
                    url: '{{ route('biolink.store.link', $biolinks->id) }}', // Update with your route
                    data: serializedData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        $('#link-content').append(`
                        <a href="${$('#link-link-input').val()}" class="px-6 py-2 rounded-full border text-center border-violet-600 duration-500 transition-all text-violet-800 w-full text-xl font-semibold">
                                                                        ${$('#name-link-input').val()}
                                                                    </a>
                        `)
                        $('#modal-add_link').toggleClass('hidden');
                        document.getElementById("preview").innerHTML =
                            '<iframe id="previews" src="{{ route('preview.biolink.index', $biolinks->id) }}" height="100%" width="100%"></iframe>';
                    },
                });
            })
        </script>
    @endpush
</x-backend.dashboard-layout>
