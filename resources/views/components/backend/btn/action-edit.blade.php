@props(['modal', 'target'])


@if ($modal)
    <button class="text-white btn bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600" data-tw-target="{{ $target }}" data-tw-toggle="modal">
    {{ $slot }}
    </button>
@else
    <a href="{{ route($name.'.edit', $id) }}" class="text-white btn bg-yellow-500 border-yellow-500 hover:bg-yellow-600 hover:border-yellow-600 focus:bg-yellow-600 focus:border-yellow-600 focus:ring focus:ring-yellow-500/30 active:bg-yellow-600 active:border-yellow-600">
        {{ $slot }}
    </a>
@endif