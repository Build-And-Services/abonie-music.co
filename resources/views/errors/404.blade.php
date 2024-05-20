<x-backend.dashboard-layout :notfound="true">
    <div class="container-fluid">
        <div class="h-screen bg-gray-50/20 dark:bg-zinc-800">
            <div>
                <div class="container pt-12 mx-auto">
                    <div class="grid justify-center grid-cols-12 pt-12">
                        <div class="col-span-12">
                            <div class="text-center">
                                <h1 class="mb-3 text-gray-600 text-8xl dark:text-gray-100">4<span class="mx-2 text-violet-500">0</span>4</h1>
                                <h4 class="uppercase mb-2 text-gray-600 text-[21px] dark:text-gray-100">Sorry, page not found</h4>
                            </div>
                            <div class="mt-12 text-center">
                                <a class="py-2 text-white border-transparent btn bg-violet-500 focus:ring focus:ring-violet-50" href="/">Back to Dashboard</a>
                            </div>
                        </div>
                        <div class="col-span-8 col-start-3">
                            <div class="pt-12">
                                <img src="{{ asset("assets-dashboard/images/error-img.png")}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-backend.dashboard-layout>
