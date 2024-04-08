<section class="container py-5">
    <header>
        <h2 class="text-lg font-medium text-dark">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm" style="color: black;">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        @if (session('status') === 'password-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-success"
                style="font-weight: bold;"
            >{{ __('Password Changed !!') }}</p>
        @endif

        <div class="mb-3">
            <label style="font-weight: bold;" for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control" autocomplete="current-password">
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" style="color: red;" />
        </div>

        <div class="mb-3">
            <label style="font-weight: bold;" for="update_password_password" class="form-label">{{ __('New Password') }}</label>
            <input id="update_password_password" name="password" type="password" class="form-control" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" style="color: red;" />
        </div>

        <div class="mb-3">
            <label style="font-weight: bold;" for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" style="color: red;" />
        </div>

        <div class="mb-3 d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</section>
