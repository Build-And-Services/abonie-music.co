<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="flex items-center justify-between px-[2px]">
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
    <div class="card dark:border-zinc-600 dark:bg-zinc-800">
        <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
            <h6 class="text-15 mb-1 text-lg font-bold text-gray-700 dark:text-gray-100">Add new presave</h6>
        </div>
        <div class="card-body relative overflow-x-auto">
            <div class="grid grid-cols-12 gap-6 py-5">
                <div class="lg:col-span-7 col-span-12">
                    <form action="{{ route('presave.update', $presave->id) }}" method="POST"
                        enctype="multipart/form-data" class="flex flex-col justify-center gap-3">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-8 justify-items-start">
                            <div class="relative col-span-12 h-[150px] w-[150px] overflow-hidden rounded-lg border-2 border-dashed border-gray-300 hover:cursor-pointer hover:bg-gray-100 md:col-span-2"
                                id="dropzone">
                                <input type="file"
                                    class="absolute inset-0 z-50 h-full w-full opacity-0 hover:cursor-pointer"
                                    name="photo" id="file-upload" />
                                @if ($presave->photo == null)
                                    <div class="py-6 text-center" id="first-image">
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
                                @else
                                    <img src="{{ $presave->photo }}" class="h-[145px] w-full" id="image-db">
                                    <div class="absolute right-0 top-0 z-50" id="close-button">
                                        <button
                                            class="rounded-full bg-gray-200 text-gray-500 hover:text-gray-700 focus:outline-none"
                                            type="button">
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
                                @endif
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
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18">
                                            </line>
                                            <line x1="6" y1="6" x2="18" y2="18">
                                            </line>
                                        </svg>
                                    </button>
                                </div>

                            </div>
                            <div
                                class="col-span-12 inline-flex w-full max-w-xl flex-col items-start gap-1.5 stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700 md:col-span-6">
                                <label
                                    class="whitespace-nowrap text-base font-medium text-black transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                    for="title">Link Title</label>
                                <div class="relative w-full">
                                    <input
                                        class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                        id="title" placeholder="Song, Albums, Artist" name="title"
                                        value="{{ $presave->title }}">
                                </div>
                                <label
                                    class="col-span-4 whitespace-nowrap text-base font-medium text-black transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                    for="title">Link URL</label>
                                <div class="flex w-full">
                                    <span
                                        class="rounded-e-0 inline-flex items-center rounded-s-md border border-e-0 border-gray-300 bg-gray-100 px-3 text-sm font-medium text-black dark:border-gray-600 dark:bg-gray-600 dark:text-gray-400">
                                        music.co/
                                    </span>
                                    <input
                                        class="mb-0.5 h-full w-full rounded-r-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out focus:border-blue-600 disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400 disabled:placeholder-slate-400"
                                        id="title" placeholder="mylink" value="{{ $presave->link }}"
                                        name="link">
                                </div>
                            </div>

                        </div>
                        <button type="submit"
                            class="mb-6 inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-gray-500 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                            Save Change
                        </button>
                    </form>

                    <div class="platform-links">
                        <h2 class="mb-4 mt-8 text-lg font-bold">Platform Links:</h2>
                        <button type="button" data-tw-target="#modal-add_link" data-tw-toggle="modal"
                            class="mb-6 inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-gray-500 px-4 py-2 text-sm font-semibold text-white hover:bg-gray-600 disabled:pointer-events-none disabled:opacity-50">
                            Add Platform
                        </button>
                        <div id='link-presave'>
                            @foreach ($presave->links as $link)
                                <form method="post" onsubmit="handleSubmit(event)"
                                    class="card relative grid grid-cols-12 content-center gap-5 px-4 py-5">
                                    <input type="hidden" name="platform_id" attrname="{{ $link->platform->name }}"
                                        value="{{ $link->platform->id }}">
                                    <input type="hidden" name="presave_id" value="{{ $presave->id }}">
                                    <input type="hidden" name="link_id" value="{{ $link->id }}">
                                    <div class="col-span-12 md:col-span-3">
                                        <img src="{{ $link->platform->thumbnail }}" alt=""
                                            class="h-full w-32">
                                    </div>
                                    <div
                                        class="col-span-12 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700 md:col-span-6">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="url">URL</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="url" placeholder="Song, Albums, Artist" name="url"
                                                value="{{ $link->link }}">
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-12 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700 md:col-span-3">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="title">Button Text</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="btn" placeholder="Listen" name="button_text"
                                                value="{{ $link->button_text }}">
                                        </div>
                                    </div>
                                    <button type="button" class="absolute right-0 top-0 p-1"
                                        onclick="handleRemove(this, {{ $link->id }})">
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
                                    <button class="hidden" type="submit"></button>
                                </form>
                            @endforeach
                        </div>

                    </div>
                    <div class="theme-links">
                        <h2 class="mb-3 mt-8 text-lg font-bold">Style Links:</h2>
                        <div class="flex flex-col gap-4">
                            <form action="" id="form_list_style">

                                <div class="relative">
                                    <input class="peer hidden" id="radio_1" type="radio" name="style_link"
                                        value="BASIC" {{ $presave->style_link == 'BASIC' ? 'checked' : '' }} />
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
                                    <input class="peer hidden" id="radio_2" type="radio" name="style_link"
                                        value="ROUNDED" {{ $presave->style_link == 'ROUNDED' ? 'checked' : '' }} />
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
                                    <input class="peer hidden" id="radio_3" type="radio" name="style_link"
                                        value="SHADOW" {{ $presave->style_link == 'SHADOW' ? 'checked' : '' }} />
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
                            </form>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 col-span-12">
                    <div class="mx-auto"
                        style="width: 100%;
                                max-width: 350px;
                                border: 15px solid #222;
                                border-radius: 40px;
                                height: 723px;
                                max-height: 723px;
                                transform-origin: right top;
                                transform-origin: 0 0;
                                background-color: #222;
                                overflow: hidden;"
                        id="preview-frame">
                        <iframe src="{{ route('preview.presave.index', $presave->id) }}" height="100%"
                            width="100%"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-backend.modal.add-link-presave :platforms="$platforms" />

    @push('scripts')
        <script>
            let input = document.getElementById('file-upload');
            let photoDB = document.getElementById('image-db')
            let buttonClose = document.getElementById('close-button')
            let preview = document.getElementById('preview');
            let startPreview = document.getElementById('start-img')
            let firstImage = document.getElementById('first-image')

            input.addEventListener('change', e => {
                let file = e.target.files[0];
                displayPreview(file);
            });


            function displayPreview(file) {
                let reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = () => {
                    let preview = document.getElementById('preview');
                    preview.src = reader.result;
                    preview.classList.remove('hidden');
                    buttonClose.classList.remove('hidden')
                    startPreview.classList.add('hidden');
                    firstImage.classList.add('hidden')
                    input.classList.add('hidden')
                };
            }

            buttonClose.addEventListener('click', e => {
                preview.src = ''
                photoDB.src = ''
                photoDB.classList.add('hidden')
                preview.classList.add('hidden')
                buttonClose.classList.add('hidden')
                startPreview.classList.remove('hidden')
                input.classList.remove('hidden')
            })
        </script>
        <script>
            function postAjax(formData) {
                $.ajax({
                    type: 'PUT',
                    url: '{{ route('link.presave.update') }}', // Update with your route
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        document.getElementById("preview-frame").innerHTML =
                            '<iframe id="preview-frame" src="{{ route('preview.presave.index', $presave->id) }}" height="100%" width="100%"></iframe>';
                    },
                });
            }

            let temp = []

            $(document).ready(function() {
                let namePlatform = $('input[name=platform_id]')
                for (let i = 0; i < namePlatform.length; i++) {
                    temp.push(namePlatform[i].getAttribute('attrName'))
                }
            })
            $(document).ready(function() {
                $('input[name="style_link"]').on('change', function() {
                    let form = $('#form_list_style');
                    let serializedData = form.serialize(); // Serializing form data

                    $.ajax({
                        url: '{{ route('link.presave.style.update', $presave->id) }}', // Ganti dengan URL endpoint yang sesuai
                        type: 'PUT',
                        data: serializedData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                        },
                        success: function(response) {
                            document.getElementById("preview-frame").innerHTML =
                                '<iframe id="preview-frame" src="{{ route('preview.presave.index', $presave->id) }}" height="100%" width="100%"></iframe>';
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log('Error:', textStatus, errorThrown);
                            // Tambahkan kode untuk menampilkan pesan kesalahan
                        }
                    });
                });
            });

            function handleSubmit(event) {
                event.preventDefault()
                let $form = $(event.target)
                let serializedData = $form.serialize();
                postAjax(serializedData)
            }

            function handleRemove(button, id) {
                $.ajax({
                    type: 'DELETE',
                    url: '{{ route('link.presave.delete', ['id' => ':id']) }}'.replace(':id', id),
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        document.getElementById("preview-frame").innerHTML =
                            '<iframe id="preview-frame" src="{{ route('preview.presave.index', $presave->id) }}" height="100%" width="100%"></iframe>';
                        temp = temp.filter((item) => item != response.name)
                        $(button).parent().remove()
                    }
                })
            }

            function platformLink(caller) {
                let namePlatform = $(caller)[0].getAttribute('attrName')
                if (temp.includes(namePlatform)) {
                    return
                }
                temp.push(namePlatform)
                let platform = $(caller)[0].getAttribute('attrUrl')
                let idPlatform = $(caller)[0].getAttribute('attrId')
                let idPresave = '{{ $presave->id }}'
                let formData = new FormData()
                formData.append('platform_id', idPlatform)
                formData.append('presave_id', idPresave)
                $.ajax({
                    type: 'POST',
                    url: '{{ route('link.presave.create', $presave->id) }}',
                    contentType: 'multipart/form-data',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // CSRF token
                    },
                    success: function(response) {
                        document.getElementById("preview-frame").innerHTML =
                            '<iframe id="preview-frame" src="{{ route('preview.presave.index', $presave->id) }}" height="100%" width="100%"></iframe>';
                        let element = `
                                <form method="post" onsubmit="handleSubmit(event)" class="card relative grid grid-cols-12 content-center gap-5 px-4 py-5">
                                <input type="hidden" name="platform_id" value="${idPlatform}">
                                <input type="hidden" name="presave_id" value="${idPresave}">
                                <input type="hidden" name="link_id" value="${response.id}">
                                    <div class="col-span-12 md:col-span-3">
                                        <img src="${platform}"
                                            alt="" class="h-full w-32">
                                    </div>
                                    <div
                                        class="col-span-12 md:col-span-6 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="url">URL</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="url" placeholder="Song, Albums, Artist" name="url">
                                        </div>
                                    </div>
                                    <div
                                        class="col-span-12 md:col-span-3 inline-flex w-full max-w-2xl flex-col items-start stroke-black transition-colors duration-300 ease-in-out focus-within:stroke-blue-700">
                                        <label
                                            class="mb-1 whitespace-nowrap text-xs font-medium text-gray-400 transition-colors duration-300 ease-in-out peer-disabled:opacity-70"
                                            for="title">Button Text</label>
                                        <div class="relative w-full">
                                            <input
                                                class="disabled:placeholder-slate-400focus:border-blue-600 mb-0.5 w-full rounded-lg border border-slate-200 px-3 py-2 text-sm font-medium placeholder-slate-400 outline-none transition-all duration-300 ease-in-out disabled:cursor-not-allowed disabled:bg-slate-50 disabled:text-slate-400"
                                                id="btn" placeholder="Listen" name="button_text">
                                        </div>
                                    </div>
                                    <button type="button" class="absolute right-0 top-0 p-1"
                                                    onclick="handleRemove(this, ${response.id})">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                     fill="none" xmlns="http://www.w3.org/2000/svg"
                                                     stroke="#a8a8a8">
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
                                    <button class="hidden" type="submit"></button>
                                </form>`
                        $('#link-presave').append(element)
                    },
                });

            }
        </script>
    @endpush

</x-backend.dashboard-layout>
