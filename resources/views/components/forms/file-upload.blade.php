<form action="/file-upload" method="post" enctype="multipart/form-data">
    @csrf

    <div class="row mb-3">
        <h2 class="col-12">File Upload</h2>
    </div>

    <div class="row align-items-end  mb-3">
        <div class="col-xs-12 col-sm-8">
            <input name="file" value="" type="file" class="form-control" id="form-file-id">
        </div>
        <div class="col-xs-12 col-sm-4">
            <button type="submit" class="btn btn-primary px-5">Save</button>
        </div>
        <x-forms.input-error field="file" />
    </div>
</form>
