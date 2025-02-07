<div class="row gx-3">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ __('Update Password') }}</h5>
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Ensure your account is using a long, random password to stay secure.') }}
                </p>
            </div>
            <div class="card-body pt-0">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="update_password_current_password" class="form-label">{{ __('Current Password') }}</label>
                                <input type="password" id="update_password_current_password" name="current_password" class="form-control" autocomplete="current-password">
                                @if ($errors->updatePassword->has('current_password'))
                                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('current_password') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="update_password_password" class="form-label">{{ __('New Password') }}</label>
                                <input type="password" id="update_password_password" name="password" class="form-control" autocomplete="new-password">
                                @if ($errors->updatePassword->has('password'))
                                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="update_password_password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                                <input type="password" id="update_password_password_confirmation" name="password_confirmation" class="form-control" autocomplete="new-password">
                                @if ($errors->updatePassword->has('password_confirmation'))
                                    <div class="text-danger mt-2">{{ $errors->updatePassword->first('password_confirmation') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            @if (session('status') === 'password-updated')
                                <p class="text-sm text-gray-600 mt-2">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>