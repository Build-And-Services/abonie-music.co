<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ $presave->title }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="relative min-h-screen backdrop-blur-md"
        @if ($presave->photo != null) style="background-image: url({{ $presave->photo }});    background-repeat: no-repeat;
    background-size: cover;" @endif>
        <div class="mx-auto mb-12 flex flex-col px-3 py-6 md:max-w-sm">
            <div class="relative mx-auto flex flex-col gap-1">
                <div class="profile-image mx-auto">
                    @if ($presave->photo != null)
                        <img src="{{ $presave->photo }}" alt=""
                            class="h-[22rem] w-[480px] rounded-lg object-cover">
                    @endif

                </div>
                <div
                    class="absolute bottom-0 left-[50%] z-0 flex h-14 w-full -translate-x-1/2 flex-col items-center justify-center gap-1 bg-black text-white">
                    <h3 class="text-xl font-bold">
                        {{ $presave->title }}
                    </h3>
                </div>
            </div>

            <div class="links grid grid-cols-12 gap-4">
                {{--            @php dd($presave->style_link == 'BASIC') @endphp --}}
                @if ($presave->style_link == 'BASIC')
                    <div class="col-span-12">
                        @foreach ($presave->links as $link)
                            <div
                                class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300">
                                <img src="{{ $link->platform->thumbnail }}" alt="" class="w-32">
                                @if ($link->link != null)
                                    <a href='{{ $link->link }}'
                                        class="whitespace-no-wrap min-w-[82px] inline-flex items-center justify-center rounded-full border
                        border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm
                        hover:bg-stone-600 hover:text-white focus:shadow-none focus:outline-none">
                                        {{ $link->button_text }}
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @elseif($presave->style_link == 'ROUNDED')
                    <div class="col-span-12 flex flex-col gap-3 mt-2">
                        @foreach ($presave->links as $link)
                            <div
                                class="group col-span-12 flex h-[3.8rem] cursor-pointer items-center justify-between rounded-full border bg-white px-4 shadow-lg transition-all duration-300 hover:scale-105">
                                <img src="{{ $link->platform->thumbnail }}" alt="" class="w-32">
                                @if ($link->link != null)
                                    <a href='{{ $link->link }}'
                                        class="whitespace-no-wrap min-w-[82px] inline-flex items-center justify-center rounded-full border
                        border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm
                        hover:bg-stone-600 hover:text-white focus:shadow-none focus:outline-none">
                                        {{ $link->button_text }}
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="col-span-12 flex flex-col gap-3 mt-2">
                        @foreach ($presave->links as $link)
                            <div class="group relative col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between rounded-lg border border-black bg-white px-4 transition-all duration-300 hover:scale-105"
                                style="box-shadow: 6px 6px 0px #000">

                                <img src="{{ $link->platform->thumbnail }}" alt="" class="w-32">
                                @if ($link->link != null)
                                    <a href='{{ $link->link }}'
                                        class="whitespace-no-wrap min-w-[82px] inline-flex items-center justify-center rounded-full border
                        border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm
                        hover:bg-stone-600 hover:text-white focus:shadow-none focus:outline-none">
                                        {{ $link->button_text }}
                                    </a>
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <footer class="fixed-bottom mx-auto px-4 py-4 text-center text-xs text-gray-400 md:max-w-md">
            <p>&copy; 2024 Abonie Music Digital. By using this service, you agree to our terms of service, privacy
                policy, and use of cookies. Cookie Preferences</p>
        </footer>
    </body>

</html>
