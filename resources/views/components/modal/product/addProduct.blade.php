@props(['toko' => ''])

<div id="addProduct" tabindex="-1" aria-hidden="true"
    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
    <div class="relative w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-start justify-between px-4 py-2 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Produk
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="addProduct">
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
                <div class="w-full bg-white backdrop-blur-sm rounded-xl p-8 border-2 border-[#61677A]  ">
                    <form action="{{ route('productUser.store', ['toko' => $toko]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="flex justify-center pb-3">
                            <div
                                class="relative border-dashed border-2 rounded-lg border-gray-800 border-opacity-70 flex items-center w-28 h-28 justify-center overflow-hidden ">
                                <img id="fotoProduct" class="object-cover w-28 h-28 "
                                    src="{{ asset('storage/image/components') }}/camera.png" alt="">
                                <div class="absolute z-10 top-0  opacity-0 hover:opacity-100 rounded-lg">
                                    <label for="fotoProductInput">
                                        <div class="w-28 h-28 bg-black opacity-60 flex items-center rounded-lg">
                                            <p class="text-center w-full"><i class="fa-solid fa-pen"
                                                    style="color: #ffffff;"></i>
                                            </p>
                                        </div>
                                        <input accept="image/*" type="file" name="image" class="hidden"
                                            id="fotoProductInput" />
                                    </label>
                                </div>
                                <script>
                                    fotoProductInput.onchange = evt => {
                                        const [file] = fotoProductInput.files
                                        if (file) {
                                            fotoProduct.src = URL.createObjectURL(file)
                                        }
                                    }
                                </script>
                            </div>
                        </div>


                        <div class="space-y-4">
                            <input type="text" placeholder="Masukkan Nama Produk" name="nama"
                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5"
                                required>
                            <input type="number" placeholder="Masukkan Harga Produk" name="harga"
                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5"
                                required>
                            <textarea class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5" required
                                placeholder="Masukkan Deskripsi Produk" name="deskripsi" id="" rows="5"></textarea>
                        </div>
                        <div class="space-y-3 mt-3">
                            <div>
                                <button type="submit"
                                    class="w-full p-3 from-[#146C94] to-[#19A7CE] bg-gradient-to-r rounded text-white mt-3">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
