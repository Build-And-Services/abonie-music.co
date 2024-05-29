<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="items-center justify-between px-[2px] md:flex">
            <h4 class="mb-sm-0 mb-2 grow text-[18px] font-medium text-gray-800 dark:text-gray-100 md:mb-0">Platform
                Presave
            </h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Platform Management
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="far fa-angle-right text-13 align-middle font-semibold text-gray-600 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="#"
                                class="text-sm font-medium text-gray-500 hover:text-gray-900 ltr:ml-2 rtl:mr-2 dark:text-gray-100 dark:hover:text-white ltr:md:ml-2 rtl:md:mr-2">Platform
                                Presave</a>
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
                    <h6 class="text-15 mb-1 text-gray-700 dark:text-gray-100">List Platform Presave</h6>
                    @can('admin.create')
                        <button
                            class="btn border-violet-500 bg-violet-500 text-white hover:border-violet-600 hover:bg-violet-600 focus:border-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-500/30 active:border-violet-600 active:bg-violet-600"
                            data-tw-target="#modal-id_form" data-tw-toggle="modal">Add Platform</button>
                    @endcan
                    <div class="modal @if ($errors->any()) p @else hidden @endif relative z-50"
                        id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 z-50 overflow-y-auto">
                            <div class="modal-overlay absolute inset-0 bg-black bg-opacity-50 transition-opacity"></div>
                            <div class="animate-translate mx-auto p-4 sm:max-w-lg">
                                <div
                                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all dark:bg-zinc-600">
                                    <div class="bg-white dark:bg-zinc-700">
                                        <button type="button"
                                            class="absolute right-2.5 top-3 inline-flex items-center rounded-lg border-transparent px-2 py-1 text-sm text-gray-400 hover:bg-gray-50/50 hover:text-gray-900 ltr:ml-auto rtl:mr-auto dark:text-gray-100 dark:hover:bg-zinc-600"
                                            data-tw-dismiss="modal">
                                            <i class="mdi mdi-close text-xl text-gray-500 dark:text-zinc-100/60"></i>
                                        </button>
                                        <div class="p-5">
                                            <h3 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">Add
                                                Platform</h3>
                                            <form class="space-y-4" action="{{ route('platform.presave.store') }}"
                                                enctype="multipart/form-data" method="post">
                                                @csrf
                                                <div>
                                                    <label for="name"
                                                        class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">New
                                                        Name</label>
                                                    <input type="text" name="name" value="{{ old('name') }}"
                                                        id="name"
                                                        class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60"
                                                        placeholder="ex: Instagram">
                                                    @error('name')
                                                        <p class="text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label for="url"
                                                        class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">URL
                                                        Platform</label>
                                                    <input type="text" name="url" value="{{ old('url') }}"
                                                        id="url"
                                                        class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60"
                                                        placeholder="ex: www.instagram.com" required>
                                                    @error('url')
                                                        <p class="text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <label for="thumbnail"
                                                        class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Thumbnail</label>
                                                    <input type="file" name="thumbnail" id="thumbnail"
                                                        value="{{ old('thumbnail') }}" id="name"
                                                        class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60">
                                                    @error('thumbnail')
                                                        <p class="text-red-500">{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                <div class="mt-2 h-[30px] w-[30px]">
                                                    <img id="thumbnail-preview" src="#" alt="Image Preview"
                                                        width="30" height="30" class="hidden rounded-md">
                                                </div>
                                                <div class="mt-6">
                                                    <button type="submit"
                                                        class="btn w-full border-transparent bg-violet-600 text-white">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body relative overflow-x-auto">
                    <x-backend.table :datas="$platforms" :columns="['name', 'url', 'thumbnail']" name="platform">
                        @foreach ($platforms as $cell)
                            <tr>
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->name }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->url }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <img src="{{ $cell->thumbnail }}" alt="" width="30" height="30"
                                        class="text-center">

                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <x-backend.btn.action-edit name="platform" :id="$cell->id" :modal="true"
                                        target="#edit-modal-{{ $cell->id }}">
                                        edit
                                    </x-backend.btn.action-edit>

                                    <x-backend.btn.action-delete name="platform.presave" :id="$cell->id">
                                        delete
                                    </x-backend.btn.action-delete>
                                </x-backend.column-table>
                            </tr>
                            <x-backend.modal id="edit-modal-{{ $cell->id }}" title="Edit Platform">
                                <form class="space-y-4" action="{{ route('platform.presave.update', $cell->id) }}"
                                    method="post" enctype="multipart/form-data">
                                    @method('PUT')
                                    @csrf
                                    <div>
                                        <label for="name"
                                            class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Name</label>
                                        <input type="text" name="name" value="{{ $cell->name }}" id="name"
                                            class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60"
                                            placeholder="ex: Instagram" required>
                                        @error('name')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="url"
                                            class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Url</label>
                                        <input type="text" name="url" value="{{ $cell->url }}"
                                            id="url"
                                            class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60"
                                            placeholder="ex: www.instagram.com" required>
                                        @error('url')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="thumbnail"
                                            class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Thumbnail</label>
                                        <input type="file" name="thumbnail" value="{{ $cell->thumbnail }}"
                                            id="thumbnail-edit" onchange="previewImage(event, {{ $cell->id }})"
                                            class="thumbnail-edit block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60">
                                        @error('thumbnail')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-2 h-[30px] w-[30px]">
                                        <img id="thumbnail-preview-edit-{{ $cell->id }}"
                                            src="{{ $cell->thumbnail }}" alt="Image Preview" width="30"
                                            height="30" class="rounded-md">
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit"
                                            class="btn w-full border-transparent bg-violet-600 text-white">Submit</button>
                                    </div>
                                </form>
                            </x-backend.modal>
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
    <script>
        // <!-- JavaScript for image preview -->
        function addPlatform() {
            document.getElementById('thumbnail').addEventListener('change', function(event) {
                const file = event.target.files[0];
                const preview = document.getElementById('thumbnail-preview');
                const reader = new FileReader();

                reader.onloadend = function() {
                    preview.src = reader.result;
                    preview.classList.remove('hidden');
                };

                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = '';
                    preview.classList.add('hidden');
                }
            });

        }

        addPlatform()

        function previewImage(event, id) {
            if (event.target.files) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('thumbnail-preview-edit-' + id).src = e.target.result
                }
                reader.readAsDataURL(event.target.files[0]);
            }
        }
        // Menangani peristiwa ketika file dipilih

        // function changeHandle(event, id) {
        //     const input = event.target;
        //     const file = input.files[0];
        //     const reader = new FileReader();
        //     const preview = document.getElementById(`thumbnail-preview-edit-${id}`);

        //     reader.onload = function() {
        //         preview.src = reader.result;
        //     };

        //     if (file) {
        //         reader.readAsDataURL(file);
        //     }
        // }
    </script>
</x-backend.dashboard-layout>
