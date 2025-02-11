<div class="row">
    <div class="col-12">
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $e)
                <div><small>{{$e}}</small></div>
            @endforeach
        </div>
    </div>
</div>
