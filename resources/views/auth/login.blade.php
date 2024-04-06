@section('title', 'Login')

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label style="color: black;" for="email" :value="__('Email')" />
            <x-text-input style="background-color: #f0f8ff; color: black;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label style="color: black;" for="password" :value="__('Password')" />

            <x-text-input style="background-color: #f0f8ff; color: black;" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-black-800" name="remember">
                <span class="ms-2 text-sm text-black-600 dark:text-black-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a style="text-decoration: none;" onmouseover="this.style.textDecoration='underline';"
                   onmouseout="this.style.textDecoration='none';" class="text-sm text-black-600 dark:text-black-400 hover:text-black-900 dark:hover:text-black-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-black-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

                <x-primary-button style="background-color: #2563eb; color: white; border-color: #2563eb;" class="ms-3"
                                  onmouseover="this.style.backgroundColor='white'; this.style.color='#2563eb';"
                                  onmouseout="this.style.backgroundColor='#2563eb'; this.style.color='white';">
                    {{ __('Log in') }}
                </x-primary-button>

        </div>
    </form>
</x-guest-layout>
