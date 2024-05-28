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
                    <h6 class="mb-1 text-gray-700 text-15 dark:text-gray-100">Edit Shortlinks</h6>
                    <a href="{{route('short.index')}}" class="text-white bg-green-600 border-transparent btn">Back</a>
                </div>
                <div class="p-5">
                    <div class="col-span-12 lg:col-span-6">
                        <form action="{{route('short.update', $getShortlink->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                            <div class="mb-4">
                                <label for="original_link" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Original Link</label>
                                <input class="w-full placeholder:text-13 text-13 py-1.5 rounded border-gray-100 focus:border focus:border-violet-50 focus:ring focus:ring-violet-500/20  dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 placeholder:text-gray-800 dark:text-zinc-100" type="text" placeholder="https://buildandservice.tech/" id="original_link" name="original_link" value="{{$getShortlink->original_link}}">
                            </div>
                            <div class="mb-4">
                                <label for="short_name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Short Name</label>
                                <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="WebBuildAndService" id="short_name" name="short_name" value="{{$getShortlink->short_name}}">
                            </div>
                            <div class="mb-4">
                                <label for="short_name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Status</label>
                                <select class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" id="status" name="status">
                                    <option class="dark:text-white" value=1 {{ $getShortlink->statuses->status === 1 ? 'selected' : '' }}>Active</option>
                                    <option class="dark:text-white" value=0 {{ $getShortlink->statuses->status == 0 ? 'selected' : '' }}>Banned</option>
                                </select>
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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var shortCodeInput = document.getElementById('short_name');
            shortCodeInput.addEventListener('input', function () {
                this.value = this.value.replace(/\s+/g, '');
            });
        });
    </script>
</x-backend.dashboard-layout>
