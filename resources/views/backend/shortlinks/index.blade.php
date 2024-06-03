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
                                <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="https://buildandservice.tech/" id="original_link" name="original_link">
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
                    <x-backend.table :datas="$shorts" :columns="['original link', 'short name', 'result link', 'status']"  name="short">
                        @foreach ($shorts as $cell)
                            <tr class="short-row" data-status="{{ $cell->statuses->status ? 'active' : 'banned' }}">
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
                                    @if ($cell->statuses->status === 1)
                                        <p class="flex px-3 justify-center py-1 font-bold text-green-700 border border-green-100 rounded bg-green-50">
                                            Active
                                        </p>
                                    @else
                                        <p class="flex px-3 justify-center py-1 font-bold text-red-700 border border-red-100 rounded bg-red-50">
                                            Banned
                                        </p>
                                    @endif
                                </x-backend.column-table>

                                <x-backend.column-table>
                                    <div class="flex gap-2">
                                        <x-backend.btn.action-edit name="short" :id="$cell->id" :modal="true" target="#edit-modal-{{ $cell->id }}">
                                            Detail
                                        </x-backend.btn.action-edit>

                                        <x-backend.btn.action-delete name="short" :id="$cell->id">
                                            Delete
                                        </x-backend.btn.action-delete>
                                    </div>
                                </x-backend.column-table>
                            </tr>
                            <x-backend.modal id="edit-modal-{{$cell->id}}" title="Edit Shortlink">
                                <form class="space-y-4">
                                    <div>
                                        <label for="original_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Original Link</label>
                                        <input type="text" name="original_link" value="{{ $cell->original_link }}" id="original_link" class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0" required="" readonly>
                                    </div>
                                    <div>
                                        <label for="original_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Short Name</label>
                                        <input type="text" name="original_link" value="{{ $cell->short_name }}" id="short_name" class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0" required="" readonly>
                                    </div>
                                    <div>
                                        <label for="original_link" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Result Link</label>
                                        <input type="text" name="original_link" value="{{ $cell->result_link }}" id="result_link" class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0" required="" readonly>
                                    </div>
                                    <div class="mt-6">
                                        <a href="{{route('short.show', $cell->id)}}">
                                            <button type="button" class="w-full text-white bg-yellow-600 border-transparent btn">Edit</button>
                                        </a>
                                    </div>
                                </form>
                            </x-backend.modal>
                        @endforeach
                    </x-backend.table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var shortCodeInput = document.getElementById('short_name');
            shortCodeInput.addEventListener('input', function () {
                this.value = this.value.replace(/\s+/g, '');
            });
        });
    </script>
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
