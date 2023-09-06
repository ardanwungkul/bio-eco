<x-app-layout>
    <div class="flex sm:flex-row flex-col-reverse min-h-screen">
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
                        <div class="flex">
                            <button data-modal-target="addSocmed" data-modal-toggle="addSocmed"
                                class="p-2 w-full bg-gradient-to-r from-violet-800 to-cyan-600 text-white rounded-lg">+
                                Tambah Social Media</button>
                        </div>
                    </div>
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
                </div>
                {{-- Design --}}
                <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <div class="grid sm:grid-cols-3 grid-cols-2 place-content-center gap-3">
                        <div>
                            <button id="ubahTemplate1" data-template="1"
                                class="sm:w-[200px] rounded-2xl mx-auto overflow-hidden shadow-lg border border-gray-400 border-opacity-40">
                                <div
                                    class="grid grid-cols-2 place-content-center place-items-center gap-3 px-5 py-10 bg-gray-100">
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow-lg shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                </div>
                                <p class="my-2"> Basic Template</p>
                            </button>
                        </div>
                        <div>
                            <button id="ubahTemplate2" data-template="2"
                                class="sm:w-[200px] rounded-2xl mx-auto overflow-hidden shadow-lg border border-gray-400 border-opacity-40">
                                <div
                                    class="grid grid-cols-2 place-content-center place-items-center gap-3 px-5 py-10 bg-gray-900">
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                    <div class="sm:w-20 sm:h-10 w-10 h-5 shadow shadow-gray-400 rounded-lg bg-white">
                                    </div>
                                </div>
                                <p class="my-2"> Dark Template</p>
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
        <div class="sm:w-1/3 flex-none mt-10">
            <div class="border-4 border-black justify-self-center rounded-3xl overflow-hidden mx-auto"
                style="width: 200px; height: 400px;">
                <iframe id="iframe" src="http://localhost:8000/{{ $toko->url }}"
                    class="scale-50 -translate-x-[26%] -translate-y-[25%]" frameborder="0"
                    style="width: 400px; height:800px"></iframe>
            </div>
        </div>

    </div>
    <x-modal.socmed.addSocmed>
    </x-modal.socmed.addSocmed>
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

<script>
    // console.log(id);
    document.addEventListener("DOMContentLoaded", function() {
        const ubahTemplate1Button = document.getElementById("ubahTemplate1");
        const ubahTemplate2Button = document.getElementById("ubahTemplate2");

        ubahTemplate1Button.addEventListener("click", function() {
            const templateValue = ubahTemplate1Button.getAttribute("data-template");
            change_template(templateValue);
        });

        ubahTemplate2Button.addEventListener("click", function() {
            const templateValue = ubahTemplate2Button.getAttribute("data-template");
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
