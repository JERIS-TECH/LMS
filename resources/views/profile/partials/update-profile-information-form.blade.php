<section>
    <header>
        <h2 class="text-lg font-medium">
            {{ __('Profile Information') }}
        </h2>

        <p class="text-sm text-black-600">
            {{ __("Update profile information.") }}
        </p>
    </header>

    <form method="post" action="{{ route('verification.send') }}" id="send-verification">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        @if (session('status') === 'profile-updated')
            <p class="text-success" style="font-weight: bold;">{{ __('Saved !!') }}</p>
        @endif

        <div class="mb-4">
            <label style="font-weight: bold;" for="name" class="form-label">{{ __('Name') }}</label>
            <input id="name" name="name" type="text" class="form-control" style="border-color: black;" value="{{ old('name', $user->name) }}" autofocus autocomplete="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label style="font-weight: bold;" for="email" class="form-label">{{ __('Email') }}</label>
            <input id="email" name="email" type="email" class="form-control" style="border-color: black;" value="{{ old('email', $user->email) }}" autocomplete="username">
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-2">
                    <p class="text-sm text-gray-600">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link">{{ __('Click here to re-send the verification email.') }}</button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="text-success">{{ __('A new verification link has been sent to your email address.') }}</p>
                    @endif
                </div>
            @endif
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label style="font-weight: bold;" for="phone" class="form-label">{{ __('Phone') }}</label>
            <input id="phone" name="phone" type="tel" class="form-control" style="border-color: black;" value="{{ old('phone', $user->phone) }}" autocomplete="phone">
            @error('phone')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label style="font-weight: bold;" for="address" class="form-label">{{ __('Address') }}</label>
            <input id="address" name="address" type="text" class="form-control" style="border-color: black;" value="{{ old('address', $user->address) }}" autocomplete="address">
            @error('address')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label style="font-weight: bold;" for="fb_id_link" class="form-label">{{ __('Facebook ID Link') }}</label>
            <input id="fb_id_link" name="fb_id_link" type="text" class="form-control" style="border-color: black;" value="{{ old('fb_id_link', $user->fb_id_link) }}" autocomplete="fb_id_link">
            @error('fb_id_link')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-4">
            <label style="font-weight: bold;" for="created_at" class="form-label">{{ __('Joined On') }}</label>
            <input id="created_at" name="created_at" type="text" class="form-control" style="border-color: black;" value="{{ old('created_at', $user->created_at) }}" disabled autocomplete="created_at">
            @error('created_at')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
        </div>
    </form>
</section>
