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
            <div class="col-md-4 col-lg-3 mb-3">
                <img src="{{ asset('storage/' . $file['path']) }}" class="img-fluid" alt="">
            </div>
        @endforeach
    </div>

@endsection
