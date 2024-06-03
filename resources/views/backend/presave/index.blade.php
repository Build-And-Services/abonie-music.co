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
    <x-backend.alert-response />
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:border-zinc-600 dark:bg-zinc-800">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="text-15 mb-1 text-gray-700 dark:text-gray-100">List Presave</h6>
                    @can('presave.create')
                        <a href="{{ route('presave.create') }}"
                            class="btn border-violet-500 bg-violet-500 text-white hover:border-violet-600 hover:bg-violet-600 focus:border-violet-600 focus:bg-violet-600 focus:ring focus:ring-violet-500/30 active:border-violet-600 active:bg-violet-600">Create
                            Presave</a>
                    @endcan
                </div>
                <div class="card-body relative overflow-x-auto">
                    <x-backend.table :datas="$biolinks" :columns="['name', 'link']" name="presaves">
                        @foreach ($biolinks as $cell)
                            {{-- <tr>
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->name }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->link }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <x-backend.btn.action-detail name="biolink" :id="$cell->id" :modal="true">
                                        detail
                                    </x-backend.btn.action-detail>
                                    <x-backend.btn.action-edit name="biolink" :id="$cell->id" :modal="true"
                                        target="#edit-modal-{{ $cell->id }}">
                                        edit
                                    </x-backend.btn.action-edit>

                                    <x-backend.btn.action-delete name="biolink" :id="$cell->id">
                                        delete
                                    </x-backend.btn.action-delete>
                                </x-backend.column-table>
                            </tr> --}}
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
</x-backend.dashboard-layout>
