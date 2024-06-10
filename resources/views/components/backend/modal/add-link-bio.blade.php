 @props(['biolink'])

 {{-- modal link --}}
 <div class="relative z-50 modal @if ($errors->any()) p @else hidden @endif" id="modal-add_link"
     aria-labelledby="modal-title" role="dialog" aria-modal="true">
     <div class="fixed inset-0 z-50 overflow-y-auto">
         <div class="absolute inset-0 transition-opacity bg-black bg-opacity-50 modal-overlay">
         </div>
         <div class="p-4 mx-auto animate-translate sm:max-w-lg">
             <div
                 class="relative overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl dark:bg-zinc-600">
                 <div class="bg-white dark:bg-zinc-700">
                     <button type="button"
                         class="absolute top-3 right-2.5 text-gray-400 border-transparent hover:bg-gray-50/50 hover:text-gray-900 dark:text-gray-100 rounded-lg text-sm px-2 py-1 ltr:ml-auto rtl:mr-auto inline-flex items-center dark:hover:bg-zinc-600"
                         data-tw-dismiss="modal">
                         <i class="text-xl text-gray-500 mdi mdi-close dark:text-zinc-100/60"></i>
                     </button>
                     <div class="p-5">
                         <h3 class="mb-4 text-xl font-medium text-gray-700 dark:text-gray-100">
                             Buat
                             Link</h3>
                         <form class="space-y-4" action="{{ route('biolink.store.link', $biolink->id) }}" method="post"
                             id="link-form">
                             @csrf
                             <div>
                                 <label for="name"
                                     class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Title</label>
                                 <input type="text" name="name" value="{{ old('name') }}" id="name-link-input"
                                     class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0"
                                     placeholder="Nama" required="">
                                 @error('name')
                                     <p class="text-red-500">
                                         {{ $message }}
                                     </p>
                                 @enderror
                             </div>
                             <div>
                                 <label for="link"
                                     class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-100 ltr:text-left rtl:text-right">Link</label>
                                 <input type="text" name="link" value="{{ old('link') }}" id="link-link-input"
                                     class="bg-gray-800/5 border border-gray-100 text-gray-900 dark:text-gray-100 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700/50 dark:border-zinc-600 dark:placeholder-gray-400 dark:placeholder:text-zinc-100/60 focus:ring-0"
                                     placeholder="https://google.com" required="">
                             </div>
                             <div class="mt-6">
                                 <button type="submit"
                                     class="w-full text-white bg-violet-600 border-transparent btn">Submit</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
