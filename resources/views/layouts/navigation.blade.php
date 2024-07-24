<nav x-data="{ open: false }" class="z-20 w-full ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    @if (Auth::user() && Auth::user()->isAdmin == true)
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @elseif(Auth::user())
                        <x-nav-link :href="route('dashboard.user')" :active="request()->routeIs('dashboard.user')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Settings Dropdown -->
            @if (Auth::user())
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        data-dropdown-placement="bottom-end"
                        class=" inline-flex items-center px-3 py-2 text-sm leading-4 font-medium rounded-md text-gray-300 hover:text-white focus:outline-none transition ease-in-out duration-150"
                        type="button">
                        {{ auth::user()->name }}
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                    <div id="dropdown"
                        class="z-10 hidden rounded-lg divide-gray-100  text-left text-sm leading-5 text-gray-700 dark:text-gray-300 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 dark:bg-gray-800 bg-white border border-blue-900 dark:border-white ">
                        <ul class=" text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="block py-2 dark:hover:bg-gray-600 rounded-lg dark:hover:text-white"
                                    style="padding-left: 16px; padding-right: 100px">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                this.closest('form').submit();"
                                        class="block py-2 dark:hover:bg-gray-600 rounded-lg dark:hover:text-white"
                                        style="padding-left: 16px; padding-right: 100px">Logout</a>
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>
            @else
                <x-nav-link :href="route('login')" class="hidden sm:flex sm:items-center sm:ml-6">
                    {{ __('Login') }}
                </x-nav-link>
            @endif


            <!-- Hamburger -->
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider"
                class="inline-flex items-center justify-center p-2 w-10 h-10 ml-3 text-sm text-white rounded-lg hover:bg-gray-100 hover:text-cyan-900 focus:outline-none focus:ring-2 focus:ring-gray-200 sm:hidden"
                type="button">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                    <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <div id="dropdownDivider" class="z-10 w-full hidden">
                <ul class="py-2 text-sm text-white bg-cyan-900 rounded-b-xl" aria-labelledby="dropdownDividerButton">
                    <li>
                        @if (Auth::user() && Auth::user()->isAdmin == true)
                            <a href="{{ route('dashboard') }}"
                                class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard
                            </a>
                        @else
                        @endif
                        @if (Auth::user())
                            <a href="{{ route('profile.edit') }}"
                                class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-gray-600 dark:hover:text-white">Profile
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a onclick="event.preventDefault();
                            this.closest('form').submit();"
                                    href="{{ route('logout') }}"
                                    class="block px-4 py-2 hover:bg-blue-800 dark:hover:bg-gray-600 dark:hover:text-white">
                                    Logout</a>
                            </form>
                            <div class="py-2 border-t border-gray-500">
                                <h2 class="block px-4 text-sm text-gray-200 ">
                                    {{ auth::user()->name }}
                                </h2>
                                <h2 class="block px-4 text-sm text-gray-200 "> {{ auth::user()->email }}</h2>
                            </div>
                        @else
                            <a href="{{ route('login') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Login
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->

</nav>
