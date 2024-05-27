<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="md:flex items-center justify-between px-[2px]">
            <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Datatable</h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                           <i class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Shortlink</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <x-backend.alert-response/>
    <div class="grid grid-cols-12 gap-6 mb-4">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Make Shortlinks</h6>
                </div>
                <div class="p-5">
                    <div class="col-span-12 lg:col-span-6">
                        <form action="{{route('short.store')}}" method="POST">
                        @csrf
                            <div class="mb-4">
                                <label for="original_link" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Original Link</label>
                                <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" placeholder="https://buildandservice.tech/" id="original_link" name="original_link">
                            </div>
                            <div class="mb-4">
                                <label for="short_name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Short Name</label>
                                <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="WebBuildAndService" id="short_name" name="short_name">
                            </div>
                            <div class="mt-6">
                                <button type="submit" class="text-white bg-violet-600 border-transparent btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">List Shortlinks</h6>
                </div>
                <div class="relative overflow-x-auto card-body">
                    <x-backend.table :datas="$shorts" :columns="['original link', 'short name', 'result link', 'status']"  name="short">
                        @foreach ($shorts as $cell)
                            <tr>
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->original_link }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->short_name }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->result_link }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <x-backend.btn.action-detail name="short" :id="$cell->id" :modal="true">
                                        detail
                                    </x-backend.btn.action-detail>

                                    <x-backend.btn.action-edit name="short" :id="$cell->id" :modal="true" target="#edit-modal-{{ $cell->id }}">
                                        edit
                                    </x-backend.btn.action-edit>

                                    <x-backend.btn.action-delete name="short" :id="$cell->id">
                                        delete
                                    </x-backend.btn.action-delete>
                                </x-backend.column-table>
                            </tr>
                            <x-backend.modal id="edit-modal-{{$cell->id}}" title="Edit Role">
                                <form class="space-y-4" action="{{ route('roles.update', $cell->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div>
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Name</label>
                                        <input type="text" name="name" value="{{ $cell->name }}" id="name" class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0" placeholder="Cashier" required="">
                                        @error('name')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit" class="w-full text-white bg-violet-600 border-transparent btn">Submit</button>
                                    </div>
                                </form>
                            </x-backend.modal>
                            {{-- <div class="relative z-50 modal hidden" id="edit-modal-{{ $cell->id }}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="fixed inset-0 z-50 overflow-y-auto">
                                    <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
                                    <div class="p-4 mx-auto animate-translate sm:max-w-lg">
                                        <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                                            <div class="bg-white dark:bg-zinc-700">
                                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600" data-tw-dismiss="modal">
                                                    <i class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                                                </button>
                                                <div class="p-5">
                                                    <h3 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">Edit Role</h3>
                                                    <form class="space-y-4" action="{{ route('roles.update', $cell->id) }}" method="post">
                                                        @method('PUT')
                                                        @csrf
                                                        <div>
                                                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Name</label>
                                                            <input type="text" name="name" value="{{ $cell->name }}" id="name" class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0" placeholder="Cashier" required="">
                                                            @error('name')
                                                                <p class="text-red-500">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        <div class="mt-6">
                                                            <button type="submit" class="w-full text-white bg-violet-600 border-transparent btn">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var shortCodeInput = document.getElementById('short_name');
            shortCodeInput.addEventListener('input', function () {
                this.value = this.value.replace(/\s+/g, '');
            });
        });
    </script>
</x-backend.dashboard-layout>
