@extends('layouts.app', ['title' => 'Add Project Detail in Project '. $page->id])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Add Project Detail</h3>

                    <a href="{{ route('pages.index') }}" class="btn btn-primary">
                        Back
                    </a>
                </div>
                <hr class="my-1">
                <div class="card-body">
                    <div class="border card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4>Project Detail</h4>
                            <a href="{{ route('projectDetails.store', $page) }}" onclick="event.preventDefault();
                            document.getElementById('project-detail').submit();" class="btn btn-success">Save</a>
                        </div>
                        <hr class="my-3">
                        <form action="{{ route('projectDetails.store', $page) }}" id="project-detail" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between">
                                <div class="w-100 mr-4">
                                    <h5 class="mb-3">Left Description</h5>
                                    <textarea name="left_description" id="left_description" class="form-control"
                                        rows="10"></textarea>
                                </div>
                                <div class="w-100">
                                    <h5 class="mb-3">Right Description</h5>
                                    <textarea name="right_description" id="right_description" class="form-control"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="mr-4 mt-4">
                                <div class="d-flex align-items-center mb-2">
                                    <h5 class="mr-3 mb-0">Slide Image</h5>
                                </div>

                                <div class="card-body d-flex flex-wrap justify-content-around">
                                    @forelse ($images as $image)
                                    <div class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                                        <label for="images{{$image->id}}[]">
                                            <img src="{{ asset('storage/' . $image->src) }}"
                                                class="w-100 h-150px rounded">
                                        </label>
                                        <div class="custom-control custom-radio">
                                            <input class="custom-control-input" name="image_id" value="{{ $image->id }}"
                                                id="images{{$image->id}}[]" type="radio" @foreach ($page->images as
                                            $pageImage)
                                            {{ $pageImage->id == $image->id ? 'checked' : ''}}
                                            @endforeach>
                                            <label class="custom-control-label" for="images{{$image->id}}[]"></label>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="text-center">
                                        <span class="font-weight-bold text-warning">Image data is empty!</span>
                                    </div>
                                    @endforelse
                                </div>
                            </div>
                        </form>
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