<x-app-layout>

    <div id="inputError"
        class="inputError hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-3">
        <li><span class="block sm:inline">Url Mengandung Karakter Tidak Valid</span></li>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500 close-btn-input" role="button"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <title>Close</title>
                <path
                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
            </svg>
        </span>
    </div>
    <form action="{{ route('toko.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="w-full flex justify-center py-10 h-full">
            <div class="max-w-lg w-full px-5 sm:px-0 space-y-3">
                <p class="text-2xl font-extrabold mb-5 text-center">Setup Your Page</p>
                <div class="flex gap-3">
                    <div class="bg-gradient-to-r from-cyan-900 to bg-cyan-600 px-4 py-1 rounded-lg w-full">
                        <div class="flex gap-3">
                            <div class="col-span-1">
                                <p
                                    class="w-full border-none text-sm rounded py-2.5 col-span-4 whitespace-nowrap text-white font-extrabold">
                                    {{ config('app.url') }}/
                                </p>
                            </div>
                            <input type="text" id="textInput" placeholder="Masukan Url" name="url" required
                                data-url=""
                                class="w-full hover:bg-[#e7e7e9] bg-white border-none text-sm rounded py-2.5 col-span-4">
                        </div>
                    </div>
                </div>

                <div class="w-full bg-white backdrop-blur-sm rounded-xl p-8 border-2 border-[#61677A]  ">

                    <div class="sm:flex justify-between gap-5 items-center">
                        <div
                            class="relative border-dashed border-2 rounded-full border-gray-800 border-opacity-70 flex items-center w-28 h-28 justify-center overflow-hidden mx-auto">
                            <img id="fotoProfil" class="object-cover w-28 h-28 "
                                src="{{ asset('storage/image/components') }}/camera.png" alt="">
                            <div class="absolute z-10 top-0  opacity-0 hover:opacity-100 rounded-full">
                                <label for="fotoProfilInput">
                                    <div class="w-28 h-28 bg-black opacity-60 flex items-center rounded-full">
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


                        <div class="space-y-4 mt-4 sm:mt-0">
                            <input type="text" placeholder="Enter Your Name" name="nama"
                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5">
                            <input type="text" placeholder="Enter Bio" name="bio"
                                class="w-full hover:bg-[#e7e7e9] bg-[#0D0C220c] border-none text-sm rounded py-2.5">
                        </div>
                    </div>
                    <div class="space-y-3 mt-3">
                        <div>
                            <button type="submit"
                                class="w-full p-3 from-[#146C94] to-[#19A7CE] bg-gradient-to-r rounded text-white mt-3">Get
                                Started</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>
<script>
    // Validasi Karakter URL
    var inputElement = document.getElementById("textInput");
    var inputError = document.getElementById("inputError");

    inputElement.addEventListener("blur", function() {
        var inputValue = inputElement.value;
        var regex = /^[A-Za-z]+$/;

        if (inputValue !== "") {
            if (!regex.test(inputValue)) {
                inputError.classList.remove("hidden");
                inputElement.value = "";
            }
        } else {
            inputError.classList.add("hidden");
        }
    });
    $(document).ready(function() {
        $('.close-btn-input').click(function() {
            $(this).closest('.inputError').addClass('hidden');
        });
    });

    // Validasi Unique URL
    var urlInput = document.getElementById("textInput");
    document.addEventListener("DOMContentLoaded", function() {

        function checkUrl() {
            var urlToCheck = urlInput.value;
            var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            $.ajax({
                type: "POST",
                url: "toko/check-url",
                data: {
                    _token: csrfToken, // Menambahkan token CSRF
                    url: urlToCheck
                },
                success: function(response) {
                    if (response.exists) {
                        // URL sudah ada di database
                        alert("URL sudah digunakan.");
                        urlInput.value = "";
                    }
                },
                error: function(error) {
                    console.error("Terjadi kesalahan: " + error.responseText);
                }
            });
        }

        urlInput.addEventListener("blur", checkUrl);
    });
</script>
</body>

</html>
