@props(['platforms'])

{{-- modal link --}}
<div class="modal relative z-50 hidden" id="modal-add_link" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 z-50 overflow-y-auto">
        <div class="modal-overlay absolute inset-0 bg-black bg-opacity-50 transition-opacity">
        </div>
        <div class="animate-translate mx-auto p-4 sm:max-w-lg">
            <div
                class="relative max-h-[500px] transform overflow-auto rounded-lg bg-white text-left shadow-xl transition-all dark:bg-zinc-600">
                <div class="bg-white dark:bg-zinc-700">
                    <button type="button"
                        class="absolute right-2.5 top-3 inline-flex items-center rounded-lg border-transparent px-2 py-1 text-sm text-gray-400 hover:bg-gray-50/50 hover:text-gray-900 ltr:ml-auto rtl:mr-auto dark:text-gray-100 dark:hover:bg-zinc-600"
                        data-tw-dismiss="modal">
                        <i class="mdi mdi-close text-xl text-gray-500 dark:text-zinc-100/60"></i>
                    </button>
                    <div class="mt-6 p-5">
                        @foreach ($platforms as $platform)
                            <div>
                                <button
                                    class="mt-3 w-full rounded-md border px-6 py-4 transition-all duration-300 hover:scale-105 hover:shadow-md hover:ring-1 hover:ring-gray-500"
                                    data-tw-dismiss="modal" onclick="platformLink(this)"
                                    attrUrl="{{ $platform->thumbnail }}" attrName="{{ $platform->name }}"
                                    attrId="{{$platform->id}}"
                                >
                                    <img src="{{ $platform->thumbnail }}" alt="{{ $platform->name }}"
                                        class="h-[40px] w-32">

                                </button>
                            </div>
                        @endforeach
                        <div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
