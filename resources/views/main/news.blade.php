@extends('main.app', ['title' => 'NEWS UPDATE'])

@section('content')
<div class="container-fluid vh-100 d-flex flex-column pt-5">
    <h5 class="font-weight-bold mt-5 pl-4 ml-5 text-uppercase ls-sm">News Update</h5>

    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-lg-6 offset-1 offset-md-5">
            <p class="pre-line">
                {{ $page->description }}
            </p>
        </div>
    </div>

    <div class="pl-4 ml-5">
        <a href="{{ route('/') }}" class="text-decoration-none text-black h1 back-btn">L</a>
    </div>
</div>

@endsection