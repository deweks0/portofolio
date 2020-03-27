@extends('main.app', ['title' => 'NEWS UPDATE'])

@section('content')
<div class="container-fluid h-100v d-flex flex-column">
    <h5 class="font-weight-bold mt-5 pl-4 ml-5 text-uppercase ls-sm">News Update</h5>

    <div class="row h-75 justify-content-center align-items-center">
        <div class="col-lg-6 offset-5">
            <p style="white-space: pre-line">
                {{ $page->description }}
            </p>
        </div>
    </div>

    <div class="pl-4 ml-5">
        <a href="#" class="text-decoration-none text-black">home</a>
        <p class="text-muted">back to home</p>
    </div>
</div>

@endsection