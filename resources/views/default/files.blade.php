@extends('layout')

@section('content')

    <x-header></x-header>

    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <x-forms.file-upload></x-forms.file-upload>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach($files as $file)
            <div class="col-md-4 col-lg-3 mb-3 position-relative">
                <img src="{{ asset('storage/' . $file['path']) }}" class="img-fluid" alt="">
                <a href="{{ url('/file-delete/' . $file->id) }}"
                   class="delete-x-link">X</a>
                {{--<a href="{{ url('/file-delete/' . $file->id) }}" class="mt-1 mx-3 text-decoration-none rounded-3 position-absolute  top-0 end-0 p-2 bg-danger text-white">X</a>--}}
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center">
            {{ $files->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
