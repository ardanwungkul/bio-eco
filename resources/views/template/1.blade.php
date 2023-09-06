<x-layout.app>
    <div class="min-h-screen max-w-md mx-auto sm:my-10 sm:rounded-xl rounded-none bg-gray-100 sm:shadow-2xl">
        <div class="pt-10 mb-3">
            <img src="{{ asset('storage/images/fotoProfil') }}/{{ $toko->gambar }}"
                class="w-24 h-24 object-cover rounded-full mx-auto" alt="">
        </div>
        <div class="mb-3">
            <p class="text-center font-bold text-2xl font-poppins">{{ $toko->nama }}</p>
        </div>
        <div class="mb-5">
            <p class="text-center mx-12 font-poppins text-sm">{{ $toko->bio }}</p>
        </div>
        <div class="mb-5 flex justify-center gap-3" data-aos="fade-up" data-aos-once="true" data-aos-duration="1000">
            <img width="25px" height="25px" src="{{ asset('storage/icon/instagram.svg') }}" alt="">
            <img width="25px" height="25px" src="{{ asset('storage/icon/facebook.svg') }}" alt="">
            <img width="25px" height="25px" src="{{ asset('storage/icon/youtube.svg') }}" alt="">
        </div>



        <div class="grid grid-cols-2 gap-5 px-10 py-2">
            @foreach ($shuffleProduk->take(4) as $item)
                <div>
                    <button class="hover:scale-125 transition duration-1000 w-full h-full"
                        data-modal-target="showProduct-{{ $item->id }}"
                        data-modal-toggle="showProduct-{{ $item->id }}">
                        <div class=" rounded-lg shadow-lg bg-white w-32" data-aos="fade-up" data-aos-once="true"
                            data-aos-duration="1000">
                            <div class="flex justify-center">
                                <div>
                                    <img class="lozad rounded-lg object-cover w-32"
                                        src="{{ asset('storage/images/product') }}/{{ $item->gambar }}" alt="">
                                </div>
                                <p class="text-start font-bold px-3 py-1">{{ $item->nama }}</p>
                            </div>
                        </div>
                    </button>
                </div>

                <div id="showProduct-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-2 rounded-t dark:border-gray-600">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="showProduct-{{ $item->id }}">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div>
                                <div class="flex justify-center px-3">
                                    <img class="w-full object-cover max-h-52 rounded-xl"
                                        src="{{ asset('storage/images/product/') }}/{{ $item->gambar }}"
                                        alt="">
                                </div>
                                <div class="px-5 my-2">
                                    <div class="border-b py-2 px-3">
                                        <p class="text-lg font-extrabold leading-none tracking-widest">Rp.
                                            {{ number_format($item->harga, 0, ',', '.') }}</p>
                                        <h1 class="text-base">{{ $item->nama }}</h1>
                                    </div>
                                </div>
                                <div class="px-5 pb-5">
                                    <div class="border rounded-lg p-3">
                                        <p class="font-extrabold">Deskripsi Produk</p>
                                        <p class="text-sm">{{ $item->deskripsi }}</p>
                                    </div>
                                </div>
                                <div class="px-5 pb-5">
                                    <div class="flex gap-2">
                                        <a
                                            href="https://api.whatsapp.com/send/?phone={{ $toko->no_hp }}&text&type=phone_number&app_absent=0">
                                            <button class="px-3 py-2 border border-black rounded-lg text-sm"><i
                                                    class="fa-regular fa-comment"></i></button>
                                        </a>
                                        <button
                                            class="px-3 py-2 border border-cyan-700 text-cyan-700 rounded-lg text-sm w-full">Beli
                                            Sekarang</button>
                                        <button
                                            class="px-3 py-2 bg-cyan-700 text-white rounded-lg text-sm w-full">Daftar
                                            Member</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="p-3">
            <p class="text-xs text-center">© 2023 Jasawebsite.biz</p>
        </div>
    </div>
</x-layout.app>

<script>
    AOS.init();
</script>
