<x-app-layout>

    <div class="space-y-3 px-5 lg:px-20 py-10">
        <div class="flex justify-between">
            <p class="text-2xl font-extrabold text-cyan-900">Daftar Produk</p>

            <a href="{{ route('product.create') }}">
                <div class="px-3 py-2 bg-gradient-to-r from-cyan-600 to-cyan-800 text-white rounded-xl">
                    Tambah Produk
                </div>
            </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-white uppercase bg-gradient-to-r from-cyan-600 to-cyan-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nama Produk
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produk as $item)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 flex justify-center">
                                <div>
                                    <img src="{{ asset('storage/images/product') }}/{{ $item->gambar }}"
                                        class="w-20 h-20 object-cover rounded-lg" alt="">
                                </div>
                            </th>
                            <td class="px-6 py-4">
                                <p class="font-extrabold text-gray-900">
                                    {{ $item->nama }}
                                </p>
                            </td>
                            <td class="px-6 py-4 text-center">
                                Rp. {{ number_format($item->harga, 0, ',', '.') }}
                            </td>
                            <td class="">
                                <div class="flex justify-center gap-3">
                                    <a href="{{ route('product.edit', $item->id) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <form action="{{ route('product.destroy', $item->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-600 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
