<x-app-layout>
    <div class="w-full flex justify-center py-10 h-full">
        <div class="max-w-lg w-full">
            <p class="text-2xl font-extrabold mb-5 text-center">Tambah Produk</p>
            <div class="w-full bg-white backdrop-blur-sm rounded-xl p-8 border-2 border-[#61677A]  ">
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex justify-center pb-3">
                        <div
                            class="relative border-dashed border-2 rounded-lg border-gray-800 border-opacity-70 flex items-center w-28 h-28 justify-center overflow-hidden ">
                            <img id="fotoProfil" class="object-cover w-28 h-28 "
                                src="{{ asset('storage/image/components') }}/camera.png" alt="">
                            <div class="absolute z-10 top-0  opacity-0 hover:opacity-100 rounded-lg">
                                <label for="fotoProfilInput">
                                    <div class="w-28 h-28 bg-black opacity-60 flex items-center rounded-lg">
                                        <p class="text-center w-full"><i class="fa-solid fa-pen"
                                                style="color: #ffffff;"></i>
                                        </p>
                                    </div>
                                    <input accept="image/*" type="file" name="image" class="hidden"
                                        id="fotoProfilInput" />
                                </label>
                            </div>
                            <script>
                                fotoProfilInput.onchange = evt => {
                                    const [file] = fotoProfilInput.files
                                    if (file) {
                                        fotoProfil.src = URL.createObjectURL(file)
                                    }
                                }
                            </script>
                        </div>
                    </div>


                    <div class="space-y-4">
                        <input type="text" placeholder="Masukkan Nama Produk" name="nama"
                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5">
                        <input type="number" placeholder="Masukkan Harga Produk" name="harga"
                            class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5">
                        <textarea class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5"
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
</x-app-layout>
