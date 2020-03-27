@extends('layouts.app', ['title' => 'Choose Image'])

@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0 d-flex justify-content-between align-items-center">
                    <h3 class="mb-0">Choose Image</h3>

                    <a href="#" class="btn btn-primary" onclick="event.preventDefault();
                    document.getElementById('form-choose').submit();">
                        Save
                    </a>
                </div>
                <hr class="my-1">
                <form action="{{ route('pages.update_image') }}" method="POST" id="form-choose">
                    @csrf
                    <div class="card-body d-flex flex-wrap justify-content-around">
                        @forelse ($images as $image)
                        <div class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                            <img src="{{ asset('storage/' . $image->src) }}" class="w-100 h-150px rounded">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" name="images[]" value="{{ $image->id }}"
                                    id="images{{$image->id}}[]" type="checkbox" @foreach ($page->images as $pageImage)
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
                </form>
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