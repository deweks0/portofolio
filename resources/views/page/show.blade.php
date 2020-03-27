@extends('layouts.app', ['title' => 'Project '. $page->id])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Project {{ $page->id }}</h3>

                    <a href="{{ route('pages.create_project_detail', $page) }}" class="btn btn-primary">
                        Add Project Detail
                    </a>
                </div>
                <hr class="my-1">
                <div class="card-body">
                    @forelse ($page->projectDetails as $key => $projectDetail)
                    <div class="border card-body mb-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Project Detail {{ $key + 1 }}</h4>
                            <button type="submit" class="btn btn-success">Save</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                        <hr class="my-3">
                        <div class="d-flex justify-content-between">
                            <div class="w-100 mr-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mr-3 mb-0">Slide Image</h5>
                                    <a href="{{ route('pages.choose_image') }}" class="btn btn-sm btn-primary">
                                        Change Image
                                    </a>
                                </div>

                                <img src="{{ asset('storage/'.$projectDetail->image->src) }}" class="w-100 h-150px">
                            </div>
                            <div class="w-100 mr-4">
                                <h5 class="mb-3">Left Description</h5>
                                <textarea name="left_description" id="left_description" class="form-control"
                                    rows="6">{{ $projectDetail->left_description }}</textarea>
                            </div>
                            <div class="w-100">
                                <h5 class="mb-3">Right Description</h5>
                                <textarea name="right_description" id="right_description" class="form-control"
                                    rows="6">{{ $projectDetail->right_description }}</textarea>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="border card-body">
                        <span class="text-danger">Project detail is empty!</span>
                    </div>
                    @endforelse
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