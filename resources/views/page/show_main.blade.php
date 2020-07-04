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
                    <div class="card-body border">
                        <form
                            action="{{ route('pageDescriptions.update', [$page->id, $page->pageDescriptions->where('description_type', 'main')->first()->id ]) }}"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description[description]" id="description" class="form-control"
                                    cols="30"
                                    rows="20">{{ $page->pageDescriptions->where('description_type', 'main')->first()->description }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>
                </div>
            </div>
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