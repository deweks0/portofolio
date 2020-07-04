@extends('main.app', ['title' => 'News Update | LAB'])

@section('content')
<div class="container-fluid vh-100 d-flex flex-column pt-5">
    <h5 class="font-weight-bold mt-5 pl-4 ml-5 text-uppercase ls-sm">News Update</h5>

    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-lg-6 offset-1 offset-md-5">
            <p class="pre-line pr-4">
                {{ $page->pageDescriptions()->first()->description }}
            </p>
        </div>
    </div>

    <div class="back-fixed">
        <a href="{{ route('/') }}">
            <img src="{{ asset('storage/images/BACK.png') }}" class="back-btn" alt="back-btn">
        </a>
    </div>
</div>

@endsection