@extends('main.app', ['title' => 'INQUIRIES'])

@section('content')
<div class="container-fluid vh-100 d-flex flex-column pt-5">
    <h5 class="font-weight-bold mt-5 pl-4 ml-5 text-uppercase ls-sm">Inquiries</h5>
    <div class="row align-items-center h-75">
        <div class="col-lg-3 offset-6">
            <div class="mb-5 pre-line">
                {{ $page->description }}
            </div>
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

    <div class="pl-4 ml-5">
        <a href="{{ route('/') }}" class="text-decoration-none text-black h1 back-btn">L</a>
    </div>
</div>
@endsection