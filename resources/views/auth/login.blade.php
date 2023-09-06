<x-guest-layout>
    <style>
        .fa-google {
            background: conic-gradient(from -45deg, #ea4335 110deg, #4285f4 90deg 180deg, #34a853 180deg 270deg, #fbbc05 270deg) 73% 55%/150% 150% no-repeat;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            -webkit-text-fill-color: transparent;
        }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4 space-y-2">
            <p class="text-2xl font-extrabold text-white text-center">Sign in to your account</p>
            <p class="text-sm text-gray-400">Start your website in seconds. Don’t have an account? <span
                    class="text-blue-600"><a href="{{ route('register') }}">Sign up</a></span>.</p>
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <div class="relative flex py-5 items-center">
            <div class="flex-grow border-t-2 opacity-20 border-gray-400"></div>
            <span class="flex-shrink mx-4 text-gray-400">or</span>
            <div class="flex-grow border-t-2 opacity-20 border-gray-400"></div>
        </div>
        <a href="{{ route('login.google') }}">
            <div class="w-full border border-gray-400 border-opacity-30 rounded-lg ">
                <div class="py-2 flex gap-3 items-center justify-center">
                    <i class="fa-brands fa-google"></i>
                    <p class="text-gray-400"> Sign In with Google</p>
                </div>
            </div>
        </a>

        <!-- Remember Me -->
        <div class="flex justify-between mb-4">
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox"
                        class="rounded dark:bg-gray-600 border-gray-300 dark:border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                        name="remember">
                    <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="text-sm text-gray-600 dark:text-blue-500 hover:underline"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif

            </div>
        </div>
        <button class="w-full text-center normal-case bg-blue-600 text-white p-2 rounded-lg">
            {{ __('Sign in to your account') }}
        </button>
    </form>
</x-guest-layout>
