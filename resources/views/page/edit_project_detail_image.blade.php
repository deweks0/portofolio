@extends('layouts.app', ['title' => 'Edit Project Detail Image in Project '. $page->id])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Edit Project Detail Image</h3>

                    <a href="{{ route('projectDetails.update_image', [$page, $projectDetail]) }}" onclick="event.preventDefault();
                    document.getElementById('project-detail').submit();" class="btn btn-success">Save</a>
                </div>
                <hr class="my-1">
                <div class="card-body">
                    <form action="{{ route('projectDetails.update_image', [$page, $projectDetail]) }}"
                        id="project-detail" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mr-4">
                            <div class="card-body d-flex flex-wrap justify-content-around">
                                @forelse ($images as $image)
                                <div class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                                    <label for="images{{$image->id}}[]">
                                        <img src="{{ asset('storage/' . $image->src) }}" class="w-100 h-150px rounded">
                                    </label>
                                    <div class="custom-control custom-radio">
                                        <input class="custom-control-input" name="image_id" value="{{ $image->id }}"
                                            id="images{{$image->id}}[]" type="radio"
                                            {{ $projectDetail->image_id == $image->id ? 'checked' : ''}}>
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

    <!-- Footer -->
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush