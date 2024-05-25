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
                            <a href="#" class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Roles</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">List Roles</h6>
                </div>
                <div class="relative overflow-x-auto card-body">
                    <x-backend.table :datas="$roles" :columns="['name', 'guard name']" name="roles">
                        @foreach ($roles as $cell)
                            <tr>
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>
                                    
                                <x-backend.column-table>
                                    {{ $cell->name }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $cell->guard_name }}
                                </x-backend.column-table>
                        
                                <x-backend.column-table>
                                    <x-backend.btn.action-detail name="roles" :id="$cell->id">
                                        detail
                                    </x-backend.btn.action-detail>
                                    <x-backend.btn.action-edit name="roles" :id="$cell->id">
                                        edit
                                    </x-backend.btn.action-edit>
                                    <x-backend.btn.action-delete name="roles" :id="$cell->id">
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
</x-backend.dashboard-layout>