<div id="instagram" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <div class="flex items-start justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    instagram
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="instagram" data-modal-target="addSocmed" data-modal-toggle="addSocmed">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-2">
                <div>
                    <input type="url" placeholder="URL" name="instagram" onblur="convertToHttps(this)"
                        onclick="clearOtherInputs('instagram')"
                        class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5 rounded-lg">
                </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center px-6 py-3 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" onclick="convertToHttps()"
                    class="text-white bg-gradient-to-r from-cyan-600 to-cyan-900 hover:from-cyan-900 hover:to-cyan-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Simpan</button>
            </div>
        </div>
    </div>
</div>
