@session('success')
<div class="grid grid-cols-1 pb-6">
    <div class="relative flex items-center px-5 py-2 text-white bg-green-500 border border-green-200 rounded alert-dismissible">
        <p>{{ session('success') }}</p>
        <button class="text-lg text-white alert-close ltr:ml-auto rtl:mr-auto"><i class="mdi mdi-close"></i></button>
    </div>
</div>
@endsession

@session('error')
<div class="grid grid-cols-1 pb-6">
    <div class="relative flex items-center px-5 py-2 text-white bg-red-500 border border-red-200 rounded alert-dismissible">
        <p>{{ session('error') }}</p>
        <button class="text-lg text-white alert-close ltr:ml-auto rtl:mr-auto"><i class="mdi mdi-close"></i></button>
    </div>
</div>
@endsession