<div id="addLink" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Tambah Link
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="addLink">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 pt-3 space-y-2">


                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                        data-tabs-toggle="#linkTabs" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="custom-tab" data-tabs-target="#custom" type="button" role="tab"
                                aria-controls="custom" aria-selected="false">Custom Link</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button
                                class="inline-block p-2 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                                id="whatsapp-tab" data-tabs-target="#whatsapp" type="button" role="tab"
                                aria-controls="whatsapp" aria-selected="false">Whatsapp Link</button>
                        </li>
                    </ul>
                </div>
                <div id="linkTabs">
                    <div class="hidden p-2 rounded-lg bg-gray-50 dark:bg-gray-800" id="custom" role="tabpanel"
                        aria-labelledby="custom-tab">
                        <form action="{{ route('link.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="space-y-3">
                                <div class="w-full" id="dynamicTable">
                                    <div class="border border-gray-300 overflow-hidden rounded">
                                        <input type="text" placeholder="Enter Link Name" name="link[0][nama]"
                                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5">
                                        <input type="text" placeholder="URL" name="link[0][url]"
                                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5">
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type="button" name="add" id="add" class="text-sm text-blue-600">+
                                        Add
                                        Link</button>
                                </div>
                                <div>
                                    <button
                                        class="p-2.5 bg-cyan-600 text-white w-full rounded-lg text-center">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="hidden p-2 rounded-lg bg-gray-50 dark:bg-gray-800" id="whatsapp" role="tabpanel"
                        aria-labelledby="whatsapp-tab">
                        <form action="{{ route('whatsapp.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="space-y-3">
                                <div class="">
                                    <div class="w-full gap-2">
                                        <p class="text-sm">Nama Link :</p>
                                        <input type="text" placeholder="Masukkan Nama Link " name="nama"
                                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5 rounded-lg">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="w-full gap-2">
                                        <p class="text-sm">Nomor Whatsapp :</p>
                                        <input type="text" placeholder="Masukkan Nomor Whatsapp " name="no_hp"
                                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5 rounded-lg">
                                    </div>
                                </div>
                                <div class="">
                                    <div class="w-full gap-2">
                                        <p class="text-sm">Pesan :</p>
                                        <textarea
                                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5 rounded-lg text-start"name="pesan"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <button
                                        class="p-2.5 bg-cyan-600 text-white w-full rounded-lg text-center">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
