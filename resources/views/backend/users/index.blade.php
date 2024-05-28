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
                <div class="relative overflow-x-auto card-body">
                    <x-backend.table :datas="$users" :columns="['name', 'email', 'status']" name="roles">
                        @foreach ($users as $user)
                            <tr class="user-row" data-status="{{ $user->statuses->status ? 'active' : 'banned' }}">
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
                                    <span
                                        class="rounded-full px-2.5 py-1 text-white @if ($user->statuses->status) bg-green-500 border border-green-200 @else bg-red-500 border border-red-200 @endif">
                                        @if ($user->statuses->status)
                                            Active
                                        @else
                                            Banned
                                        @endif
                                    </span>
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <x-backend.btn.action-detail name="users" :id="$user->id">
                                        Detail
                                    </x-backend.btn.action-detail>
                                    @if ($user->id != Auth::user()->id)
                                        <x-backend.btn.action-delete name="users" :id="$user->id">
                                            Delete
                                        </x-backend.btn.action-delete>
                                    @endif
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
                $('.user-row').each(function() {
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
