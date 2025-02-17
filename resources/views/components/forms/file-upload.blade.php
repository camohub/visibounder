<form action="/file-upload" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <h2 class="col-12 h4">{{ __('forms.file-upload.title') }}</h2>
    </div>

    <div class="row align-items-end  mb-3">
        <div class="col-xs-12 col-sm-8">
            <input name="file" value="" type="file" class="form-control" id="form-file-id">
        </div>
        <div class="col-xs-12 col-sm-4">
            <button type="submit" class="btn btn-primary px-5">{{ __('forms.file-upload.save') }}</button>
        </div>
        <x-forms.input-error field="file" />
    </div>
</form>
