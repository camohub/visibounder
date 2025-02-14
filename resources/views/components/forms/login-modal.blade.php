<!-- This is login modal component -->

<div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form action="/login" method="post" class="">

                <div class="modal-body">
                    @csrf

                    <div class="mb-3 d-flex flex-row justify-content-start align-items-end">
                        <h2 class="mb-0">Login</h2>
                        {{-- data-bs-dismiss="modal" close login-modal --}}
                        <small class="ms-3 mb-0 text-primary" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#register-modal">or Register</small>
                    </div>

                    <div class="row mb-3">
                        <div class="col-12">
                            <label for="form-email-id" class="form-label">Email</label>
                            <input name="email" value="{{ old('email') }}" type="text" class="form-control" id="form-email-id">
                        </div>
                        <x-forms.input-error field="email" error_bag="login" />
                    </div>
                    <div class="row mb-4">
                        <div class="col-12">
                            <label for="form-password-id" class="form-label">Password</label>
                            <input name="password" value="{{ old('password') }}" type="password" class="form-control" id="form-password-id">
                        </div>
                        <x-forms.input-error field="password" error_bag="login" />
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Log in</button>
                        </div>
                    </div>
                </div>


                @if ( $errors->login->isNotEmpty() )
                    <script>
                        window.onload = function () {
                            var loginModal = new bootstrap.Modal(document.getElementById('login-modal'));
                            loginModal.show();
                        };
                    </script>
                @endif
            </form>
        </div>
    </div>
</div>
