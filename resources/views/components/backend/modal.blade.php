@props(['id', 'title'])

<div class="relative z-50 modal hidden" id="{{ $id }}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-y-auto">
        <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay"></div>
        <div class="p-4 mx-auto animate-translate sm:max-w-lg">
            <div class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                <div class="bg-white dark:bg-zinc-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600" data-tw-dismiss="modal">
                        <i class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                    </button>
                    <div class="p-5">
                        <h3 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">{{ $title }}</h3>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>