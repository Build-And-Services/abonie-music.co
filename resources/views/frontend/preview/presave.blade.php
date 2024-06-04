<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="relative min-h-screen backdrop-blur-md"
        style="background-image: url({{ asset('assets-dashboard/images/preview_presave.jpg') }})
        ">
        <div class="mx-auto mb-12 flex flex-col px-3 py-6 md:max-w-md">
            <div class="relative mx-auto flex flex-col gap-1">
                <div class="profile-image mx-auto">
                    <img src="{{ asset('assets-dashboard/images/preview_presave.jpg') }}" alt=""
                        class="h-[400px] w-[480px] rounded-lg">
                </div>
                <div
                    class="absolute bottom-0 left-[50%] z-0 flex h-12 w-full -translate-x-1/2 items-center justify-center bg-black text-white">
                    <h3 class="text-xl font-bold">
                        NEX GEN ALBUMS
                    </h3>
                </div>
            </div>

            <div class="links grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <div
                        class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:scale-105 hover:rounded-lg">
                        <img src="https://li.sten.to/images/music-platforms/bandcamp.svg" alt="" class="w-32">
                        <a href="#_"
                            class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                            Listen
                        </a>
                    </div>

                    <div
                        class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:scale-105 hover:rounded-lg">
                        <img src="https://li.sten.to/images/music-platforms/amazon-music.svg" alt=""
                            class="w-32">
                        <a href="#_"
                            class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                            Listen
                        </a>
                    </div>
                    <div
                        class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:scale-105 hover:rounded-lg">
                        <img src="https://li.sten.to/images/music-platforms/youtube-music.svg" alt=""
                            class="w-32">
                        <a href="#_"
                            class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                            Listen
                        </a>
                    </div>
                    <div
                        class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:scale-105 hover:rounded-lg">
                        <img src="https://li.sten.to/images/music-platforms/joox.svg" alt="" class="w-32">
                        <a href="#_"
                            class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                            Listen
                        </a>
                    </div>
                    <div
                        class="group col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between border border-gray-100 bg-white px-4 transition-all duration-300 hover:scale-105 hover:rounded-lg">
                        <img src="https://li.sten.to/images/music-platforms/youtube.svg" alt="" class="w-32">
                        <a href="#_"
                            class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                            Listen
                        </a>
                    </div>
                </div>
                <div
                    class="group col-span-12 flex h-[3.8rem] cursor-pointer items-center justify-between rounded-full border bg-white px-4 shadow-lg transition-all duration-300 hover:scale-105">
                    <img src="https://li.sten.to/images/music-platforms/spotify.svg" alt="" class="w-32">
                    <a href="#_"
                        class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                        Listen
                    </a>
                </div>
                <div class="group relative col-span-12 flex h-[3.6rem] cursor-pointer items-center justify-between rounded-lg border border-black bg-white px-4 transition-all duration-300 hover:scale-105"
                    style="box-shadow: 6px 6px 0px #000">
                    <img src="https://li.sten.to/images/music-platforms/apple-music.svg" alt="" class="w-32">
                    <a href="#_"
                        class="whitespace-no-wrap inline-flex items-center justify-center rounded-full border border-gray-400 bg-white px-4 py-1 text-base font-medium leading-6 text-black shadow-sm hover:bg-gray-50 focus:shadow-none focus:outline-none">
                        Listen
                    </a>
                </div>

            </div>

        </div>
        <footer class="fixed-bottom mx-auto px-4 py-4 text-center text-xs text-gray-400 md:max-w-md">
            <p>&copy; 2024 Abonie Music Digital. By using this service, you agree to our terms of service, privacy
                policy, and use of cookies. Cookie Preferences</p>
        </footer>
    </body>

</html>
