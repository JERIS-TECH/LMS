@section('title', 'Forgot Password')


<x-guest-layout>
    <div class="mb-4 text-sm text-black-600 dark:text-black-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label style="color: black;" for="email" :value="__('Email')" />
            <x-text-input style="background-color: #f0f8ff; color: black;" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button style="background-color: #2563eb; color: white; border-color: #2563eb;" class="ms-3"
                              onmouseover="this.style.backgroundColor='white'; this.style.color='#2563eb';"
                              onmouseout="this.style.backgroundColor='#2563eb'; this.style.color='white';">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
