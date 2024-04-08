<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-black-900 dark:text-black-100">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 text-sm text-black-600 dark:text-black-400">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button id="confirmDeleteBtn" class="btn btn-danger">{{ __('Delete Account') }}</button>

    <div id="confirmDeleteModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="confirmDeleteForm" method="post" action="{{ route('profile.destroy') }}" class="p-6 m-3">
                    @csrf
                    @method('delete')

                    <h2 class="text-lg font-medium text-black-900 dark:text-black-100">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h2>

                    <p class="mt-1 text-sm text-black-600 dark:text-black-400">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mt-6 mb-3">
                        <label for="password" class="form-label sr-only">{{ __('Password') }}</label>
                        <input id="password" name="password" type="password" class="form-control mt-1" placeholder="{{ __('Password') }}">

                        @error('password')
                        <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6 d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary me-3" data-dismiss="modal">{{ __('Cancel') }}</button>
                        <button type="submit" class="btn btn-danger">{{ __('Delete Account') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
