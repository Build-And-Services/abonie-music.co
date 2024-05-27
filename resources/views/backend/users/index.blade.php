<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="md:flex items-center justify-between px-[2px]">
            <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">Data Table
            </h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Users Management
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="#"
                                class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">All
                                User</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <x-backend.alert-response />
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="card dark:bg-zinc-800 dark:border-zinc-600">
                <div class="card-body flex items-center justify-between border-b border-gray-100 dark:border-zinc-600">
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">List Users</h6>
                    @can('admin.create')
                        <button
                            class="text-white btn bg-violet-500 border-violet-500 hover:bg-violet-600 hover:border-violet-600 focus:bg-violet-600 focus:border-violet-600 focus:ring focus:ring-violet-500/30 active:bg-violet-600 active:border-violet-600"
                            data-tw-target="#modal-id_form" data-tw-toggle="modal">Create Role</button>
                    @endcan
                </div>
                <div class="relative overflow-x-auto card-body">
                    <x-backend.table :datas="$users" :columns="['name', 'email', 'status']" name="roles">
                        @foreach ($users as $user)
                            <tr>
                                <x-backend.column-table>
                                    {{ $loop->iteration }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $user->name }}
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    {{ $user->email }}
                                </x-backend.column-table>
                                <x-backend.column-table>
                                    {{ $user->email }}
                                </x-backend.column-table>


                                <x-backend.column-table>
                                    <x-backend.btn.action-detail name="roles" :id="$user->id" :modal="true">
                                        detail
                                    </x-backend.btn.action-detail>

                                    <x-backend.btn.action-edit name="roles" :id="$user->id" :modal="true"
                                        target="#edit-modal-{{ $user->id }}">
                                        edit
                                    </x-backend.btn.action-edit>

                                    <x-backend.btn.action-delete name="roles" :id="$user->id">
                                        delete
                                    </x-backend.btn.action-delete>
                                </x-backend.column-table>
                            </tr>
                            <x-backend.modal id="edit-modal-{{ $user->id }}" title="Edit Role">
                                <form class="space-y-4" action="{{ route('roles.update', $user->id) }}" method="post">
                                    @method('PUT')
                                    @csrf
                                    <div>
                                        <label for="name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Name</label>
                                        <input type="text" name="name" value="{{ $user->name }}" id="name"
                                            class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0"
                                            placeholder="Cashier" required="">
                                        @error('name')
                                            <p class="text-red-500">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit"
                                            class="w-full text-white bg-violet-600 border-transparent btn">Submit</button>
                                    </div>
                                </form>
                            </x-backend.modal>
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
</x-backend.dashboard-layout>
