@props(['id' => null, 'nama' => '', 'url' => ''])
<div id="editLink-{{ $id }}" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Edit Link
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="editLink-{{ $id }}">
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
                <form action="{{ route('link.update', ['id' => $id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="space-y-3">
                        <div class="w-full">
                            <div class="border border-gray-300 overflow-hidden rounded">
                                <input type="text" placeholder="Enter Link Name" name="nama"
                                    class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5"
                                    value="{{ $nama }}">
                                <input type="text" placeholder="URL" name="url"
                                    class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5"
                                    value="{{ $url }}">
                            </div>
                        </div>
                        <div>
                            <button class="p-2.5 bg-cyan-600 text-white w-full rounded-lg text-center">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
