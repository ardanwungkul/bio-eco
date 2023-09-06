@if (Auth::user() && Auth::user()->isAdmin == true)
    <div class="h-screen items-center self-center align-middle fixed z-40 flex">
        <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
            aria-controls="drawer-navigation" class=" bg-cyan-800 p-3 text-white rounded-r-full
        "><i
                class="fa-solid fa-arrow-right text-white"></i>
        </button>
    </div>

    <!-- drawer component -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-50 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white dark:bg-gray-800 rounded-r-3xl"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <h5 id="drawer-navigation-label" class="text-base font-semibold uppercase text-cyan-800 ">
            Admin
        </h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="bg-transparent hover:bg-cyan-800 hover:text-white rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ route('dashboard') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-black dark:hover:text-white">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900  fill-cyan-800"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3 group-hover:text-black text-gray-700">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-white transition duration-75 rounded-lg group hover:bg-gray-100 dark:hover:text-white hover:text-black dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-produk" data-collapse-toggle="dropdown-produk">
                        <div class="w-6 h-6">
                            <i class="fa-solid fa-lg fa-database text-cyan-800 "></i>
                        </div>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap text-gray-700">Produk</span>
                        <svg class="w-6 h-6 text-gray-700" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-produk" class="hidden py-2 space-y-2">
                        <li>
                            <a href="{{ route('product.index') }}"
                                class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-gray-700">Daftar
                                Produk</a>
                        </li>
                        <li>
                            <a href="{{ route('product.create') }}"
                                class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-gray-700">Tambah
                                Produk</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('user.index') }}"
                        class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 hover:text-black dark:hover:text-white">
                        <i class="fa-solid fa-user fa-lg text-cyan-800"></i>
                        <span class="ml-3 group-hover:text-black text-gray-700">User</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endif
