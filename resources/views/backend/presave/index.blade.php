<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="items-center justify-between px-[2px] md:flex">
            <h4 class="mb-sm-0 mb-2 grow text-[18px] font-medium text-gray-800 dark:text-gray-100 md:mb-0">Presave</h4>
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
    <x-backend.alert-response/>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:border-zinc-600 dark:bg-zinc-800">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <div class="">
                        <h6 class="text-15 mb-1 text-gray-700 dark:text-gray-100">List Presave</h6>
                        <div class="flex items-center gap-2">
                            <h6 class="text-gray-700 dark:text-gray-100">Filter Status: </h6>
                            <select id="status-filter"
                                class="rounded py-0 border border-gray-200 dark:bg-[#383d3b] dark:border-[#747675] dark:text-[#ced4da]">
                                <option value="all">All</option>
                                <option value="active">Active</option>
                                <option value="banned">Banned</option>
                            </select>
                        </div>
                    </div>
                    @can('presave.create')
                        <button data-tw-target="#modal-id_form" data-tw-toggle="modal"
                                class="btn border-violet-500 bg-violet-500 text-white hover:border-violet-600 hover:bg-violet-600 focus:border-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-500/30 active:border-violet-600 active:bg-violet-600">
                            Create
                            Presave
                        </button>
                        <div class="modal @if ($errors->any()) p @else hidden @endif relative z-50"
                             id="modal-id_form" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="fixed inset-0 z-50 overflow-y-auto">
                                <div
                                    class="modal-overlay absolute inset-0 bg-black bg-opacity-50 transition-opacity"></div>
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
                                                <h3 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">
                                                    Presave Create</h3>
                                                <form class="space-y-4" action="{{ route('presave.store') }}"
                                                      method="post">
                                                    @csrf
                                                    <div>
                                                        <label for="title"
                                                               class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Title</label>
                                                        <input type="text" name="title" value="{{ old('title') }}"
                                                               id="title"
                                                               class="block w-full rounded border border-gray-100 bg-gray-800/5 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-0 focus:ring-blue-500 dark:border-zinc-600 dark:bg-zinc-700/50 dark:text-gray-100 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60"
                                                               placeholder="Albums, Song" required>
                                                        @error('title')
                                                        <p class="text-red-500">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <label for="link"
                                                               class="mb-2 block text-sm font-medium text-gray-900 ltr:text-left rtl:text-right dark:text-gray-100">Link</label>
                                                        <div
                                                            class="flex items-center rounded border bg-gray-50 dark:border-zinc-600 dark:bg-zinc-600">
                                                            <div class="input-group-text px-4 dark:text-zinc-100">
                                                                https://music.co/
                                                            </div>
                                                            <input type="text"
                                                                   class="w-full border-0 border-l border-gray-100 placeholder:text-sm focus:border-violet-100 focus:ring focus:ring-violet-500/20 dark:border-zinc-600 dark:bg-zinc-700 dark:text-zinc-100 dark:placeholder:text-zinc-100"
                                                                   value="{{ Str::random(6) }}" name="link">
                                                        </div>
                                                    </div>
                                                    <div class="mt-6">
                                                        <button type="submit"
                                                                class="btn w-full border-transparent bg-violet-600 text-white">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                </div>
                <div class="card-body relative overflow-x-auto">
                    <x-backend.table :datas="$presaves" :columns="['title', 'link', 'views', 'status']" name="presaves">
                        @foreach ($presaves as $cell)
                            <tr class="short-row" data-status="{{ $cell->statuses->status ? 'active' : 'banned' }}">
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->title }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->link }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    @if ($cell->viewable->count === 0)
                                        <p class="flex px-3 justify-center py-1 font-bold text-sky-700 border border-sky-100 rounded bg-sky-50">
                                            Not yet used
                                        </p>
                                        @else
                                        <p class="flex px-3 justify-center py-1 font-bold text-sky-700 border border-sky-100 rounded bg-sky-50">
                                            {{ $cell->viewable->count }}
                                        </p>
                                    @endif
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    @if ($cell->statuses->status === 1)
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="flex px-3 justify-center py-1 font-bold text-green-700 border border-green-100 rounded bg-green-50">
                                                Active
                                            </p>
                                            <form action="{{route('platform.presave.status.update',$cell->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="bg-red-500 hover:bg-red-600 px-3 text-red-200 py-1 rounded-md">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <div class="flex justify-center items-center gap-2">
                                            <p class="flex px-3 justify-center py-1 font-bold text-red-700 border border-red-100 rounded bg-red-50">
                                                Banned
                                            </p>
                                            <form action="{{route('platform.presave.status.update',$cell->id)}}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="bg-green-500 hover:bg-green-600 px-3 text-green-200 py-1 rounded-md">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <x-backend.btn.action-edit name="presave" :id="$cell->id" :modal="false"
                                                               target="#edit-modal-{{ $cell->id }}">
                                        edit
                                    </x-backend.btn.action-edit>

                                    <x-backend.btn.action-delete name="presave" :id="$cell->id">
                                        delete
                                    </x-backend.btn.action-delete>
                                </x-backend.column-table>
                            </tr>
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#status-filter').change(function() {
                var status = $(this).val();
                $('.short-row').each(function() {
                    if (status === 'all') {
                        $(this).show();
                    } else {
                        if ($(this).data('status') === status) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    }
                });
            });
        });
    </script>
</x-backend.dashboard-layout>
