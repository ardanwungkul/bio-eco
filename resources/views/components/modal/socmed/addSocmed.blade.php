<div id="addSocmed" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Social Media
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="addSocmed">
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

                <div class="w-full p-3 flex justify-between bg-gray-100 rounded-lg items-center">
                    <div class="flex gap-3 items-center ">
                        <img class="w-8 h-8" src="{{ asset('storage/icon/facebook.svg') }}" alt="">
                        <p>Facebook</p>
                    </div>
                    <div>
                        <button class="text-blue-500" type="button" data-modal-target="facebook"
                            data-modal-toggle="facebook" data-modal-hide="addSocmed">+
                        </button>
                    </div>
                </div>
                <div class="w-full p-3 flex justify-between bg-gray-100 rounded-lg items-center">
                    <div class="flex gap-3 items-center ">
                        <img class="w-8 h-8" src="{{ asset('storage/icon/instagram.svg') }}" alt="">
                        <p>Instagram</p>
                    </div>
                    <button class="text-blue-500" type="button" data-modal-target="instagram"
                        data-modal-toggle="instagram" data-modal-hide="addSocmed">+
                    </button>
                </div>
                <div class="w-full p-3 flex justify-between bg-gray-100 rounded-lg items-center">
                    <div class="flex gap-3 items-center ">
                        <img class="w-8 h-8" src="{{ asset('storage/icon/youtube.svg') }}" alt="">
                        <p>Youtube</p>
                    </div>
                    <button class="text-blue-500" type="button" data-modal-target="youtube" data-modal-toggle="youtube"
                        data-modal-hide="addSocmed">+
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
