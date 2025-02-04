@extends('layout')

@section('content')

    @include('components.header')

    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#default-modal">
                Open modal
            </button>
        </div>
    </div>

    @include('components.modal', ['modal_id' => 'default-modal', 'title' => 'Some title', 'content' => 'This is content'])
@endsection
