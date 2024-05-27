<button data-tw-target="#delete-modal-{{ $id }}" data-tw-toggle="modal" class="text-white btn bg-red-500 border-red-500 hover:bg-red-600 hover:border-red-600 focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-500/30 active:bg-red-600 active:border-red-600">
    {{ $slot }}
</button>

<div class="relative z-50 modal hidden" id="delete-modal-{{ $id }}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-y-auto">
        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
            <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                <div class="bg-white dark:bg-zinc-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600" data-tw-dismiss="modal">
                        <i class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                    </button>
                    <div class="">
                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4 dark:bg-zinc-700 ">
                            <div class="sm:flex sm:items-start">
                                <div class="flex items-center justify-center  w-12 h-12 mx-auto rounded-full bg-red-50 sm:mx-0 sm:h-10 sm:w-10 flex-shrink-0">
                                    <!-- Heroicon name: outline/exclamation-triangle -->
                                    <i class="text-red-500 mdi mdi-alert-outline text-22"></i>
                                </div>
                                <div class="mt-3 text-center sm:mt-0 ltr:sm:ml-4 rtl:sm:mr-4 ltr:sm:text-left rtl:sm:text-right">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900 dark:text-gray-100" id="modal-title">Delete Data</h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500 dark:text-zinc-100/60">Do you realy to delete data ?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-t border-gray-50 sm:flex ltr:sm:flex-row-reverse sm:px-6 dark:bg-zinc-600 dark:border-zinc-600">
                            <form action="{{ route($name.'.destroy', $id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white bg-red-500 border border-transparent rounded-md shadow-sm btn hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm dark:focus:ring-red-500/30">Delete</button>
                            </form>
                            <button type="button" class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm btn dark:text-gray-100 hover:bg-gray-50/50 focus:outline-none focus:ring-2 focus:ring-gray-500/30 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm dark:bg-zinc-700 dark:border-zinc-600 dark:hover:bg-zinc-600 dark:focus:bg-zinc-600 dark:focus:ring-zinc-700 dark:focus:ring-gray-500/20" data-tw-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>