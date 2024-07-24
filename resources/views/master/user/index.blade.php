<x-app-layout>

    <div class="space-y-3 px-5 lg:px-20 py-10">
        <div class="flex justify-between">
            <p class="text-2xl font-extrabold text-cyan-900">Daftar User</p>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg ">
            <table class="w-full text-sm text-left text-gray-500 border-collapse">
                <thead class="text-xs text-white uppercase bg-gradient-to-r from-cyan-600 to-cyan-800">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center border border-slate-600">
                            Nama User
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border border-slate-600">
                            Nama Toko
                        </th>

                        <th scope="col" class="px-6 py-3 text-center border border-slate-600">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3 text-center border border-slate-600">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        {{-- @if ($item->isAdmin == false) --}}
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4 border border-slate-600">
                                <p class="font-extrabold text-gray-900">
                                    {{ $item->name }}
                                </p>
                            </td>
                            <td class="px-6 py-4 border border-slate-600">
                                @foreach ($item->toko as $items)
                                    <p class="font-extrabold text-gray-900">
                                        {{ $items->nama }}
                                    </p>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 border border-slate-600 text-start">
                                {{ $item->email }}
                            </td>
                            <td class="px-6 py-4 border border-slate-600 text-center">
                                <form action="{{ route('user.destroy', $item->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="font-medium text-red-600 hover:underline">Delete</button>
                                </form>
                            </td>
                        </tr>
                        {{-- @endif --}}
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
