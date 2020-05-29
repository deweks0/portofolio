@extends('layouts.app', ['title' => 'Main Page'])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Main Page | {{ $page->title }}</h3>
                </div>
                <hr class="my-1">
                <div class="card-body">
                    @if (request()->session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="ni ni-like-2"></i></span>
                        <span class="alert-inner--text">
                            {{ session()->get('message') }}
                        </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    @if ($page->id == 11)
                    <div class="d-flex flex-column border mb-4 rounded card-body">
                        <div class="d-flex mb-4">
                            <h4 class="mr-3 mb-0">Slider Images</h4>
                            <a href="{{ route('pages.choose_image') }}" class="btn btn-sm btn-primary">Choose
                                Image</a>
                        </div>

                        <div class="d-flex flex-wrap">
                            @foreach ($page->images as $image)
                            <div class="w-25 mr-2 mb-2">
                                <img src="{{ asset('storage/'.$image->src) }}" class="w-100 h-150px rounded">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <form action="{{ route('pages.update', $page->id) }}" method="POST" class="border card-body">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" cols="30"
                                rows="15">{{ $page->description }}</textarea>
                        </div>
                        @if ($page->id == 11)
                        <div class="form-group">
                            <label for="left_description">Left Description</label>
                            <textarea name="left_description" id="left_description" class="form-control" cols="30"
                                rows="10">{{ $page->left_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="right_description">Right Description</label>
                            <textarea name="right_description" id="right_description" class="form-control" cols="30"
                                rows="10">{{ $page->right_description }}</textarea>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush