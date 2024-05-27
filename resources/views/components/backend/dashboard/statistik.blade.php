@props(['title', 'total'])
<div class="card rounded-lg shadow-lg dark:border-zinc-600 dark:bg-zinc-800">
    <div class="card-body px-6 py-4">
        <div>
            <div class="flex flex-col">
                <div>
                    <i {!! $attributes->merge([
                        'class' =>
                            'h-10 w-10 rounded-full border border-gray-50 border-transparent bg-violet-50/50 text-center align-middle text-xl leading-loose text-violet-500 transition-all duration-300 ltr:mr-5 rtl:ml-5 dark:border-transparent dark:border-zinc-600 dark:bg-violet-500/20',
                    ]) !!}></i>

                </div>
                <div class="flex w-full flex-col">
                    <h4 class="text-21 font-2xl my-4 font-bold text-gray-800 dark:text-gray-100">
                        <span class="counter-value">{{ $total }}</span>

                    </h4>
                </div>

            </div>
        </div>
        <div class="flex justify-between">
            <span class="text-13 font-medium text-gray-700 dark:text-zinc-100">Total {{ $title }}</span>
            <span
                class="rounded bg-green-500/40 px-1 py-[1px] text-[10px] font-medium text-green-500 dark:bg-green-500/30">+
                $20.9k</span>
        </div>
    </div>
</div>

{{-- bx bx-user --}}
