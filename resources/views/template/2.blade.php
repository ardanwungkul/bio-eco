<x-layout.app>
    <div class="min-h-screen max-w-md mx-auto sm:my-10 sm:rounded-xl rounded-none sm:shadow-2xl bg-gray-900">
        <div class="pt-10 mb-3">
            <img src="{{ asset('storage/images/fotoProfil') }}/{{ $toko->gambar }}"
                class="w-24 h-24 object-cover rounded-full mx-auto" alt="">
        </div>
        <div class="mb-3">
            <p class="text-center font-bold text-2xl font-poppins text-white">{{ $toko->nama }}</p>
        </div>
        <div class="mb-5">
            <p class="text-center mx-12 font-poppins text-sm text-gray-400">{{ $toko->bio }}</p>
        </div>
        <div class="mb-5 flex justify-center gap-3 ">
            @foreach ($toko->socmed as $item)
                <a href="{{ $item->url }}">
                    <img width="25px" height="25px" src="{{ asset('storage/icon/') }}/{{ $item->gambar }}"
                        alt="">
                </a>
            @endforeach
        </div>



        <div class="grid grid-cols-2 gap-5 px-10 py-2 mb-5">
            @if ($toko->default_product == 1)
                @foreach ($shuffleProduk->take(4) as $item)
                    <div>
                        <button class="hover:scale-105 transition duration-1000 w-full h-full"
                            data-modal-target="showProduct-{{ $item->id }}"
                            data-modal-toggle="showProduct-{{ $item->id }}">
                            <div class="rounded-lg shadow-lg bg-white w-full" data-aos="fade-up" data-aos-once="true"
                                data-aos-duration="1000">
                                <div>
                                    <div>
                                        <img class="lozad rounded-t-lg object-cover aspect-square w-full"
                                            src="{{ asset('storage/images/product') }}/{{ $item->gambar }}"
                                            alt="">
                                    </div>
                                    <p class="text-start font-bold px-3 py-1 text-sm text-ellipsis line-clamp-1">
                                        {{ $item->nama }}</p>
                                </div>
                            </div>
                        </button>
                    </div>

                    {{-- Modal --}}
                    <div id="showProduct-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-gray-900 rounded-lg shadow ">
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
                                    <div class=" px-3">
                                        <img class="max-h-52  object-contain rounded-xl mx-auto"
                                            src="{{ asset('storage/images/product/') }}/{{ $item->gambar }}"
                                            alt="">
                                    </div>
                                    <div class="px-5 my-2">
                                        <div class="border-b py-2 px-3">
                                            <p class="text-lg font-extrabold leading-none tracking-widest text-white">
                                                Rp.
                                                {{ number_format($item->harga, 0, ',', '.') }}</p>
                                            <h1 class="text-base text-white">{{ $item->nama }}</h1>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-5">
                                        <div class="border rounded-lg p-3">
                                            <p class="font-extrabold text-white">Deskripsi Produk</p>
                                            <p class="text-sm text-white">{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-5">
                                        <div class="flex gap-2">
                                            <a href="//wa.me/{{ $toko->no_hp }}">
                                                <button class="px-3 py-2 border border-white rounded-lg text-sm"><i
                                                        class="fa-regular fa-comment text-white"></i></button>
                                            </a>
                                            <a href="//wa.me/{{ $toko->no_hp }}?text=Halo%20kak%2C%20Saya%20Ingin%20Membeli%20Produk%20{{ $item->nama }}"
                                                class="px-3 py-2 border border-cyan-700 text-cyan-700 rounded-lg text-sm w-full">Beli
                                                Sekarang</a>
                                            <a href="//wa.me/{{ $toko->no_hp }}?text=Halo%20kak%2C%20Saya%20Ingin%20Bergabung%20Menjadi%20Member"
                                                class="px-3 py-2 bg-cyan-700 text-white rounded-lg text-sm w-full">Daftar
                                                Member</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                @foreach ($shuffleProdukUser->take(4) as $item)
                    <div>
                        <button class="hover:scale-105 transition duration-1000 w-full h-full"
                            data-modal-target="showProduct-{{ $item->id }}"
                            data-modal-toggle="showProduct-{{ $item->id }}">
                            <div class="rounded-lg shadow-lg bg-white w-full" data-aos="fade-up" data-aos-once="true"
                                data-aos-duration="1000">
                                <div>
                                    <div>
                                        <img class="lozad rounded-t-lg object-cover aspect-square w-full"
                                            src="{{ asset('storage/images/product') }}/{{ $item->gambar }}"
                                            alt="">
                                    </div>
                                    <p class="text-start font-bold px-3 py-1 text-sm text-ellipsis line-clamp-1">
                                        {{ $item->nama }}</p>
                                </div>
                            </div>
                        </button>
                    </div>

                    {{-- Modal --}}
                    <div id="showProduct-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-600 bg-opacity-50 min-h-full">
                        <div class="relative w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-gray-900 rounded-lg shadow ">
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
                                    <div class=" px-3">
                                        <img class="max-h-52  object-contain rounded-xl mx-auto"
                                            src="{{ asset('storage/images/product/') }}/{{ $item->gambar }}"
                                            alt="">
                                    </div>
                                    <div class="px-5 my-2">
                                        <div class="border-b py-2 px-3">
                                            <p class="text-lg font-extrabold leading-none tracking-widest text-white">
                                                Rp.
                                                {{ number_format($item->harga, 0, ',', '.') }}</p>
                                            <h1 class="text-base text-white">{{ $item->nama }}</h1>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-5">
                                        <div class="border rounded-lg p-3">
                                            <p class="font-extrabold text-white">Deskripsi Produk</p>
                                            <p class="text-sm text-white">{{ $item->deskripsi }}</p>
                                        </div>
                                    </div>
                                    <div class="px-5 pb-5">
                                        <div class="flex gap-2">
                                            <a href="//wa.me/{{ $toko->no_hp }}">
                                                <button class="px-3 py-2 border border-white rounded-lg text-sm"><i
                                                        class="fa-regular fa-comment text-white"></i></button>
                                            </a>
                                            <a href="//wa.me/{{ $toko->no_hp }}?text=Halo%20kak%2C%20Saya%20Ingin%20Membeli%20Produk%20{{ $item->nama }}"
                                                class="px-3 py-2 border border-cyan-700 text-cyan-700 rounded-lg text-sm w-full">Beli
                                                Sekarang</a>
                                            <a href="//wa.me/{{ $toko->no_hp }}?text=Halo%20kak%2C%20Saya%20Ingin%20Bergabung%20Menjadi%20Member"
                                                class="px-3 py-2 bg-cyan-700 text-white rounded-lg text-sm w-full">Daftar
                                                Member</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        {{-- Link --}}
        <div class="mb-3 px-5">
            <div class="space-y-5">
                @foreach ($toko->whatsapp as $item)
                    <div>
                        <a href="//wa.me/{{ $item->no_hp }}">
                            <div data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"
                                class="w-full p-2.5 rounded-lg bg-white text-sm text-center drop-shadow-xl font-extrabold border border-gray-200 flex items-center">
                                <i class="fa fa-whatsapp text-green-400 fa-xl w-5">
                                </i>
                                <p class="text-center w-full -ml-5">
                                    {{ $item->nama }}
                                </p>
                            </div>
                        </a>
                    </div>
                @endforeach
                @foreach ($toko->link as $item)
                    <div>
                        <a href="//{{ $item->url }}">
                            <div data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"
                                class="w-full p-2.5 rounded-lg bg-white text-sm text-center drop-shadow-xl font-extrabold border border-gray-200">
                                {{ $item->nama }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="p-3">
            <p class="text-xs text-center text-white">© 2023 Jasawebsite.biz</p>
        </div>
    </div>
</x-layout.app>

<script>
    AOS.init();
</script>
