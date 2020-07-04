@extends('main.app', ['title' => 'Inquiries | LAB'])

@section('content')
<div class="container-fluid d-flex flex-column about-wrapper">
    <h5 class="font-weight-bold mt-5 pl-4 ml-5 text-uppercase ls-sm">Inquiries</h5>
    <div class="row mt-5">
        <div class="col-xl-5 px-5 offset-md-6">
            <div class="mb-5 pre-line">
                {{ $page->pageDescriptions()->first()->description }}
            </div>
        </div>
    </div>

    <div class="row align-items-center">
        <div class="col-xl-3 px-5 offset-md-6">
            <form>
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" class="form-control" id="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="Message">Message</label>
                    <input type="text" class="form-control" id="Message">
                </div>
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>
    </div>

    <div class="pl-4 ml-5 mt-2">
        <a href="{{ route('/') }}">
            <img src="{{ asset('storage/images/BACK.png') }}" class="back-btn" alt="back-btn">
        </a>
    </div>
</div>
@endsection