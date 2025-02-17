<!-- This is register modal component -->

<div class="modal fade" id="register-modal" tabindex="-1" aria-labelledby="register-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form action="/register" method="post" class="">

                <div class="modal-body">
                    @csrf

                    <div class="mb-3 d-flex flex-row justify-content-start align-items-end">
                        <h2 class="mb-0">{{ __('forms.register.title') }}</h2>
                        {{-- data-bs-dismiss="modal" close register-modal --}}
                        <small class="ms-3 mb-0 text-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#login-modal">{{ __('forms.register.or_log_in') }}</small>

                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="form-name-id" class="form-label">{{ __('forms.register.name') }}</label>
                            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="form-name-id">
                        </div>
                        <x-forms.input-error field="name" error_bag="register" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="form-surname-id" class="form-label">{{ __('forms.register.surname') }}</label>
                            <input name="surname" value="{{ old('surname') }}" type="text" class="form-control" id="form-surname-id">
                        </div>
                        <x-forms.input-error field="surname" error_bag="register" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="form-email-id" class="form-label">Email</label>
                            <input name="email" value="{{ old('email') }}" type="text" class="form-control" id="form-email-id">
                        </div>
                        <x-forms.input-error field="email" error_bag="register" />
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="form-password-id" class="form-label">{{ __('forms.register.password') }}</label>
                            <input name="password" value="{{ old('password') }}" type="password" class="form-control" id="form-password-id">
                        </div>
                        <x-forms.input-error field="password" error_bag="register" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('forms.register.close') }}</button>
                            <button type="submit" class="btn btn-primary">{{ __('forms.register.register') }}</button>
                        </div>
                    </div>
                </div>

                @if ( $errors->register->isNotEmpty() )
                    <script>
                        window.onload = function () {
                            var registerModal = new bootstrap.Modal(document.getElementById('register-modal'));
                            registerModal.show();
                        };
                    </script>
                @endif
            </form>
        </div>
    </div>
</div>
