<form action="/login" method="post" class="">
    @csrf

    <div class="row mb-3">
        <h2 class="col-12">Login</h2>
    </div>

    <div class="row mb-3">
        <div class="col-12">
            <label for="form-name-id" class="form-label">Name</label>
            <input name="name" value="{{ old('name') }}" type="text" class="form-control" id="form-name-id">
        </div>
        <x-forms.input-error field="name" />
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <label for="form-surname-id" class="form-label">Surname</label>
            <input name="surname" value="{{ old('surname') }}" type="text" class="form-control" id="form-surname-id">
        </div>
        <x-forms.input-error field="surname" />
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <label for="form-email-id" class="form-label">Email</label>
            <input name="email" value="{{ old('email') }}" type="text" class="form-control" id="form-email-id">
        </div>
        <x-forms.input-error field="email" />
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <label for="form-password-id" class="form-label">Password</label>
            <input name="password" value="{{ old('password') }}" type="text" class="form-control" id="form-password-id">
        </div>
        <x-forms.input-error field="password" />
    </div>
    <div class="row mb-3">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>
    </div>
</form>
