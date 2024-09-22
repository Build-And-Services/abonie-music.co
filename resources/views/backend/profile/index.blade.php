<x-backend.dashboard-layout>
    <div class="grid grid-cols-1 pb-6">
        <div class="md:flex items-center justify-between px-[2px]">
            <h4 class="text-[18px] font-medium text-gray-800 mb-sm-0 grow dark:text-gray-100 mb-2 md:mb-0">
            </h4>
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 ltr:md:space-x-3 rtl:md:space-x-0">
                    <li class="inline-flex items-center">
                        <a href="#"
                            class="inline-flex items-center text-sm text-gray-800 hover:text-gray-900 dark:text-zinc-100 dark:hover:text-white">
                            Users Profile
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center rtl:mr-2">
                            <i
                                class="font-semibold text-gray-600 align-middle far fa-angle-right text-13 rtl:rotate-180 dark:text-zinc-100"></i>
                            <a href="#"
                                class="text-sm font-medium text-gray-500 ltr:ml-2 rtl:mr-2 hover:text-gray-900 ltr:md:ml-2 rtl:md:mr-2 dark:text-gray-100 dark:hover:text-white">Edit Profile</a>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <x-backend.alert-response />
    <div class="col-span-12 lg:col-span-9">
        <div class="card dark:bg-zinc-800 dark:border-zinc-600">
            <div class="card-body ">
                <div class="grid grid-cols-12 ">
                    <div class="col-span-9">
                        <div class="flex flex-wrap items-center">
                            <div class="w-20 h-20 ltr:mr-1 rtl:ml-1">
                                @if (!empty($getUser->img))
                                    <img src="data:image/png;base64,{{ $getUser->img }}" alt="User Image" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600 dark:border-zinc-600">
                                @else
                                    <img src="{{ asset('assets/logo-abonie-new.png') }}" alt="Default Image" class="h-20 p-1 mx-auto rounded-full border border-gray-100 dark:border-zinc-600 dark:border-zinc-600">
                                @endif
                            </div>
                            <div class="md:ml-3 mt-3 md:mt-0">
                                <h5 class="text-gray-700 text-16 font-bold dark:text-gray-100">{{$getUser->name}}</h5>

                                <div class="flex flex-wrap items-start gap-2 text-13">
                                    <div class="capitalize text-gray-500 dark:text-zinc-100"><i class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>{{Auth::user()->getRoleNames()->first()}}</div>
                                    <div class="text-gray-500 dark:text-zinc-100"><i class="text-green-500 align-middle mdi mdi-circle-medium me-1 ltr:mr-1 rtl:ml-1"></i>{{$getUser->email}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-3">
                        <div class="flex flex-wrap items-center justify-end">
                            <button type="button" id="btn-edit-profile" class="border-transparent btn bg-violet-600 text-white dark:bg-violet-700 dark:text-gray-100"><i class="me-1"></i>Edit Profile</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card dark:bg-zinc-800 dark:border-zinc-600 form-edit-profile" id="" style="display: none" >
            <div class="border-b card-body border-gray-50 dark:border-zinc-600">
                <h5 class="text-gray-700 text-15 dark:text-gray-100">About</h5>
            </div>
            <div class="card-body">
                <div>
                    <div class="pb-3">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 md:col-span-12">
                                <form action="{{route('profile.update', $getUser->id)}}" method="POST" enctype="multipart/form-data">
                                @method('POST')
                                @csrf
                                    <div class="mb-4">
                                        <label for="original_link" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Username</label>
                                        <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="https://buildandservice.tech/" id="name" value="{{$getUser->name}}" name="name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="short_name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Email</label>
                                        <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="text" placeholder="WebBuildAndService" id="email" value="{{$getUser->email}}" name="email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="img" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Image</label>
                                        <img id="preview-image" src="#" alt="Preview Image" class="mb-3 w-32 h-32 object-cover rounded-full" style="display: none;">
                                        <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="file" id="img" name="img">
                                    </div>
                                    <div class="mb-4">
                                        <label for="short_name" class="block mb-2 font-medium text-gray-700 dark:text-gray-100">Password</label>
                                        <input class="w-full placeholder:text-13 py-1.5 text-13 rounded border-gray-100 focus:border focus:border-violet-500 focus:ring focus:ring-violet-500/20 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder:text-zinc-100 dark:text-zinc-100" type="password" placeholder="Add new password" id="password" type="password" name="password">
                                    </div>
                                    <div class="mt-6">
                                        <button type="submit" class="text-white bg-violet-600 border-transparent btn">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#status-filter').change(function() {
                let status = $(this).val();
                $('.user-row').each(function() {
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
            $('#img').on('change', function () {
                let input = this;
                if (input.files && input.files[0]) {
                    let reader = new FileReader();

                    reader.onload = function(e) {
                        $('#preview-image').attr('src', e.target.result).show();
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            })
        });
        document.getElementById('btn-edit-profile').addEventListener('click', function() {
        console.log('click')
        let formEdit = document.querySelector('.form-edit-profile');

        if (formEdit.style.display === 'none') {
            formEdit.style.display = 'block';
        } else if (formEdit.style.display === 'block') {
            formEdit.style.display = 'none';
        }
    });
    </script>
</x-backend.dashboard-layout>
