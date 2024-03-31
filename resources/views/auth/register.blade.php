<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label style="color: black;" for="name" :value="__('Name *')" />
            <x-text-input style="background-color: #f0f8ff; color: black;" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label style="color: black;" for="email" :value="__('Email *')" />
            <x-text-input style="background-color: #f0f8ff; color: black;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone Number -->
        <div class="mt-4">
            <x-input-label style="color: black;" for="phone" :value="__('Phone No. *')" />
            <x-text-input style="background-color: #f0f8ff; color: black;" id="phone" class="block mt-1 w-full" type="tel" name="phone" :value="old('phone')" autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label style="color: black;" for="password" :value="__('Password *')" />

            <x-text-input style="background-color: #f0f8ff; color: black;" id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label style="color: black;" for="password_confirmation" :value="__('Confirm Password *')" />

            <x-text-input style="background-color: #f0f8ff; color: black;" id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            <a style="text-decoration: none;" onmouseover="this.style.textDecoration='underline';"
               onmouseout="this.style.textDecoration='none';" class="underline text-sm text-black-600 dark:text-black-400 hover:text-black-900 dark:hover:text-black-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-black-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button style="background-color: #2563eb; color: white; border-color: #2563eb;" class="ms-3"
                              onmouseover="this.style.backgroundColor='white'; this.style.color='#2563eb';"
                              onmouseout="this.style.backgroundColor='#2563eb'; this.style.color='white';">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
