<x-app-layout>
    <div class="flex lg:flex-row flex-col-reverse min-h-screen">
        <div class="py-5 sm:px-20 px-5 flex-auto">
            <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                <ul class="flex flex-wrap justify-evenly -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">
                    <li class="mr-2" role="presentation">
                        <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab"
                            data-tabs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">Link</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab"
                            aria-controls="dashboard" aria-selected="false">Design</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="settings-tab" data-tabs-target="#settings" type="button" role="tab"
                            aria-controls="settings" aria-selected="false">Stats</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300"
                            id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab"
                            aria-controls="contacts" aria-selected="false">Setting</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                {{-- Link --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel"
                    aria-labelledby="profile-tab">
                    <div>
                        <div class="flex gap-10">
                            <button data-modal-target="addSocmed" data-modal-toggle="addSocmed"
                                class="p-2 w-full bg-cyan-600 text-white rounded-lg hover:bg-violet-600 transition duration-500 shadow-xl">+
                                Tambah Social Media</button>
                            <button data-modal-target="addLink" data-modal-toggle="addLink"
                                class="p-2 w-full bg-violet-600 text-white rounded-lg hover:bg-cyan-600 transition duration-500 shadow-xl">+
                                Tambah Link</button>
                        </div>
                    </div>
                    {{-- Link --}}
                    <fieldset class="border border-cyan-600 p-3 rounded-lg mt-3 pt-0">
                        <legend class="bg-cyan-600 px-5 border border-violet-700 rounded-md py-1 text-white">Link
                        </legend>
                        <div class="space-y-2 p-3">
                            @foreach ($toko->whatsapp as $item)
                                <div class="flex gap-3">
                                    <div class="w-full">
                                        <a href="//wa.me/{{ $item->no_hp }}?text={{ $item->pesan }}" class=""
                                            target="_blank">
                                            <div
                                                class="text-center bg-gradient-to-r from-cyan-600 to-violet-600 p-2.5 rounded-lg flex items-center">
                                                <div>
                                                    <i class="fa fa-whatsapp text-green-400 fa-lg w-5"> </i>
                                                </div>
                                                <p class="text-white text-center w-full -ml-5">
                                                    {{ $item->nama }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2 border p-2.5 rounded-lg border-cyan-600">
                                        <div>
                                            <button data-modal-target="editWhatsapp-{{ $item->id }}"
                                                data-modal-toggle="editWhatsapp-{{ $item->id }}">
                                                <i class="fa fa-pen text-blue-500"></i>
                                            </button>
                                            <x-modal.link.editWhatsapp :id="$item->id" :nama="$item->nama"
                                                :pesan="$item->pesan" :nohp="$item->no_hp">
                                            </x-modal.link.editWhatsapp>
                                        </div>
                                        <div>
                                            <form action="{{ route('whatsapp.destroy', ['whatsapp' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button><i class="fa fa-trash text-red-500 "></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            @foreach ($toko->link as $item)
                                <div class="flex gap-3">
                                    <div class="w-full">
                                        <a href="//{{ $item->url }}" target="_blank" class="">
                                            <div
                                                class="text-center bg-gradient-to-r from-cyan-600 to-violet-600 p-2.5 rounded-lg">
                                                <p class="text-white">
                                                    {{ $item->nama }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex items-center gap-2 border p-2.5 rounded-lg border-cyan-600">
                                        <div>
                                            <button data-modal-target="editLink-{{ $item->id }}"
                                                data-modal-toggle="editLink-{{ $item->id }}">
                                                <i class="fa fa-pen text-blue-500"></i>
                                            </button>
                                            <x-modal.link.editLink :id="$item->id" :nama="$item->nama"
                                                :url="$item->url">
                                            </x-modal.link.editLink>
                                        </div>
                                        <div>
                                            <form action="{{ route('link.destroy', ['link' => $item->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button><i class="fa fa-trash text-red-500 "></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    {{-- Socmed --}}
                    <fieldset class="border border-cyan-600 p-3 rounded-lg mt-3 pt-0">
                        <legend class="bg-cyan-600 px-5 border border-violet-700 rounded-md py-1 text-white">Social
                            Media
                        </legend>
                        <div class="flex justify-center gap-3">
                            @foreach ($toko->socmed as $item)
                                <a href="{{ $item->url }}">
                                    <img class="w-10" src="{{ asset('storage/icon/') }}/{{ $item->gambar }}"
                                        alt="{{ $item->url }}">
                                </a>
                            @endforeach
                        </div>
                    </fieldset>
                    {{-- Product --}}
                    <fieldset class="border border-cyan-600 p-3 rounded-lg mt-3 pt-0">
                        <legend class="bg-cyan-600 px-5 border border-violet-700 rounded-md py-1 text-white">Produk
                        </legend>
                        <div class="p-2 flex gap-3 items-center">
                            <label for="produkDefault" class="flex items-center gap-3 text-sm w-min whitespace-nowrap">
                                <input type="checkbox" name="produkDefault" id="produkDefault" class="rounded-full"
                                    @if ($toko->default_product == 1) checked @endif>
                                Gunakan Produk Default
                            </label>
                            <div id="loading-message" style="display: none;">
                                <div class="loader"></div>
                            </div>
                        </div>
                        <div id="grid" class="space-y-3">
                            <button data-modal-target="addProduct" data-modal-toggle="addProduct"
                                class="p-2 w-full bg-gradient-to-r hover:animate-gradient-x duration-700 from-cyan-600 to-violet-600 text-white rounded-lg hover:bg-cyan-600 transition ease-in-out shadow-xl">+
                                Tambah Produk</button>
                            <div class="grid grid-cols-3 gap-3">
                                @foreach ($product as $item)
                                    <div class="border rounded-lg p-2">
                                        <div>
                                            <img src="{{ asset('storage/images/product') }}/{{ $item->gambar }}"
                                                class="rounded-lg aspect-square object-cover" alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </fieldset>

                </div>
                {{-- Design --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="grid lg:grid-cols-3 grid-cols-2  place-content-center gap-3">
                        <div>
                            <button id="ubahTemplate1" data-template="1"
                                class="w-full sm:max-w-[211px] rounded-2xl mx-auto overflow-hidden shadow-lg border border-gray-400 border-opacity-40">
                                <div
                                    class="grid grid-cols-2 place-content-center place-items-center gap-3 px-5 py-10 bg-gray-100">
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                </div>
                                <p class="my-2"> Basic Template</p>
                            </button>
                        </div>
                        <div>
                            <button id="ubahTemplate2" data-template="2"
                                class="w-full sm:max-w-[211px] rounded-2xl mx-auto overflow-hidden shadow-lg border border-gray-400 border-opacity-40">
                                <div
                                    class="grid grid-cols-2 place-content-center place-items-center gap-3 px-5 py-10 bg-gray-900">
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                </div>
                                <p class="my-2"> Dark Template</p>
                            </button>
                        </div>
                        <div>
                            <button id="ubahTemplate3" data-template="3"
                                class="w-full sm:max-w-[211px] rounded-2xl mx-auto overflow-hidden shadow-lg border border-gray-400 border-opacity-40 ">
                                <div
                                    class="grid grid-cols-2 place-content-center place-items-center gap-3 px-5 py-10 bg-[#1B1B1B] relative ">
                                    <div class="absolute top-0 h-10 w-full"
                                        style="background-color: #1B1B1B; background-image: linear-gradient(90deg, #6441A5 5%, #2A0845 100%);">
                                        <div class="relative h-full w-full">
                                            <div class="absolute bottom-0 w-full">
                                                <div style="transform: rotate(180deg);">
                                                    <object style="box-shadow: 0px -10px 0px 0px  #1B1B1B"
                                                        class="object-cover"
                                                        data="{{ asset('storage/template/svg/divider.svg') }}"></object>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                    <div class="w-full h-10 shadow shadow-gray-400 rounded-lg bg-white relative z-[1]">
                                    </div>
                                </div>
                                <p class="my-2"> Purple Dark</p>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- Stat --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel"
                    aria-labelledby="settings-tab">
                </div>
                {{-- Setting --}}
                <div class="hidden rounded-lg " id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                    <form action="{{ route('toko.update', $toko->id) }}" class="space-y-3" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="bg-gradient-to-r from-cyan-900 to bg-cyan-600 p-4 rounded-lg">
                            <div class="flex gap-3">
                                <div class="col-span-1">
                                    <p
                                        class="w-full border-none text-sm rounded py-2.5 col-span-4 whitespace-nowrap text-white font-extrabold">
                                        {{ config('app.url') }}/
                                    </p>
                                </div>
                                <input type="text" placeholder="Masukan Url" name="url"
                                    value="{{ $toko->url }}" required
                                    class="w-full hover:bg-[#e7e7e9] bg-white border-none text-sm rounded py-2.5 col-span-4">
                            </div>
                        </div>
                        <div class="ctn rounded-lg p-[2px]">
                            <div class="space-y-3 bg-white p-4 rounded-lg">

                                <div class="sm:flex gap-3">
                                    <div
                                        class="relative rounded-full border-opacity-70 flex items-center w-32 h-32 justify-center overflow-hidden mx-auto">
                                        <img id="fotoProfil" class="object-cover w-32 h-32 "
                                            src="{{ asset('storage/images/fotoProfil') }}/{{ $toko->gambar }}"
                                            alt="">
                                        <div class="absolute z-10 top-0  opacity-0 hover:opacity-100 rounded-full">
                                            <label for="fotoProfilInput">
                                                <div
                                                    class="w-32 h-32 bg-black opacity-60 flex items-center rounded-full">
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
                                    <div class="space-y-3 flex-auto mt-3 sm:mt-0">
                                        <div class="space-y-1">
                                            <input type="text" placeholder="Enter Your Name" name="nama"
                                                required value="{{ $toko->nama }}"
                                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5 col-span-4">
                                        </div>
                                        <div class="space-y-3">
                                            <textarea type="text" placeholder="Masukan Bio" name="bio" required
                                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5 col-span-4 text-start">{{ $toko->bio }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-cols-5 sm:grid gap-3">
                                    <div class="col-span-1 justify-between hidden sm:flex">
                                        <label class="text-sm ">No Hp</label>
                                        <p class="text-sm">:</p>
                                    </div>
                                    <input type="text" placeholder="Masukan Nomor Hp" name="no_hp"
                                        value="{{ $toko->no_hp }}"
                                        class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5 col-span-4">
                                </div>
                                <div class="grid-cols-5 sm:grid gap-3">
                                    <div class="col-span-1 justify-between hidden sm:flex">
                                        <label class="text-sm">Alamat</label>
                                        <p class="text-sm">:</p>
                                    </div>
                                    <input type="text" placeholder="Masukan Alamat" name="alamat"
                                        value="{{ $toko->alamat }}"
                                        class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5 col-span-4">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="glow" class="p-3 bg-cyan-700 text-white rounded-lg w-full   "> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="lg:w-1/3 flex-none mt-10">
            <div class="border-4 border-black justify-self-center rounded-3xl overflow-hidden mx-auto"
                style="width: 200px; height: 400px;">
                <iframe id="iframe" src="http://localhost:8000/{{ $toko->url }}"
                    class="scale-50 -translate-x-[26%] -translate-y-[25%]" frameborder="0"
                    style="width: 400px; height:800px"></iframe>
            </div>
        </div>


    </div>
    <p id="idToko" data-id="{{ $toko->id }}"></p>
    <x-modal.socmed.addSocmed>
    </x-modal.socmed.addSocmed>
    <x-modal.link.addLink>
    </x-modal.link.addLink>
    <x-modal.product.addProduct :toko="$toko->id">
    </x-modal.product.addProduct>
    <form action="{{ route('socmed.store') }}" method="POST">
        @csrf
        <x-modal.socmed.facebook>
        </x-modal.socmed.facebook>
        <x-modal.socmed.instagram>
        </x-modal.socmed.instagram>
        <x-modal.socmed.youtube>
        </x-modal.socmed.youtube>
    </form>
</x-app-layout>

{{-- Dynamic Add Link --}}
<script type="text/javascript">
    $(document).ready(function() {
        var i = 0;

        $("#add").click(function() {
            ++i;

            $("#dynamicTable").append(
                '<div class="border border-gray-300 mt-5 overflow-hidden rounded" id="div"><div class="relative"><input type="text" name="link[' +
                i +
                '][nama]" placeholder="Enter Link Name"class=" w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5"><button type="button" class="absolute right-3 top-2 text-xs sm:text-sm remove-tr text-red-500">x</button></div><input type="text" name="link[' +
                i +
                '][url]" placeholder="URL"class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm py-2.5"></div>'
            );
        });

        $(document).on('click', '.remove-tr', function() {
            $(this).parents('#div').remove();
        });
    });
</script>

{{-- Change Template --}}
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const ubahTemplate1Button = document.getElementById("ubahTemplate1");
        const ubahTemplate2Button = document.getElementById("ubahTemplate2");
        const ubahTemplate3Button = document.getElementById("ubahTemplate3");

        ubahTemplate1Button.addEventListener("click", function() {
            const templateValue = ubahTemplate1Button.getAttribute("data-template");
            change_template(templateValue);
        });

        ubahTemplate2Button.addEventListener("click", function() {
            const templateValue = ubahTemplate2Button.getAttribute("data-template");
            change_template(templateValue);
        });

        ubahTemplate3Button.addEventListener("click", function() {
            const templateValue = ubahTemplate3Button.getAttribute("data-template");
            change_template(templateValue);
        });


        function change_template(templateValue, data) {
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            var data = JSON.parse('{!! json_encode($toko->id) !!}')
            var iframe = document.getElementById('iframe');
            $.ajax({
                url: '/toko/template-change/' + data,
                type: 'PUT',
                data: {
                    data: data,
                    _token: csrfToken,
                    templateValue: templateValue
                },
                success: function(response) {
                    iframe.src = iframe.src;
                },
                error: function(error) {
                    // Handle error di sini
                    console.error(error);
                }
            });
        }
    });
</script>

{{-- Display Default Product --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const checkbox = document.querySelector('[name="produkDefault"]');
        const grid = document.getElementById('grid');

        // Function to update the grid display
        function updateGridDisplay() {
            if (checkbox.checked) {
                grid.style.display = 'none';
            } else {
                grid.style.display = 'block';
            }
        }
        checkbox.addEventListener('change', updateGridDisplay);
        updateGridDisplay();
    });
</script>

{{-- Change Default Product --}}
<script>
    const checkboxes = document.querySelectorAll('[name="produkDefault"]');
    const loadingMessage = document.getElementById('loading-message');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const toko = document.getElementById('idToko');
            const tokoId = toko.getAttribute('data-id');
            const newValue = this.checked ? 1 : 0;
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            loadingMessage.style.display = 'block';
            $.ajax({
                url: '/toko/product-change/' + tokoId,
                type: 'PUT',
                data: {
                    _token: csrfToken,
                    default_product: newValue
                },
                success: function(response) {
                    console.log('success merubah views product');
                    iframe.src = iframe.src;
                    loadingMessage.style.display = 'none';
                },
                error: function(error) {
                    console.error(error);
                    loadingMessage.style.display = 'none';
                }
            });
        });
    });
</script>
