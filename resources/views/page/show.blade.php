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

                    <a href="#" class="btn btn-primary">
                        Add Project Detail
                    </a>
                </div>
                <hr class="my-1">
                <div class="card-body">
                    <div>
                        <h4>Project Detail 1</h4>
                    </div>
                    {{-- @forelse ($images as $image)
                    <div class="w-25 mx-2 mb-4 d-flex">
                        <img src="{{ asset('storage/' . $image->src) }}" class="w-100 h-150px rounded">
                    <span class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <form id="delete-image" action="{{ route('images.destroy', $image) }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <a href="{{ route('images.destroy', $image) }}" class="dropdown-item" onclick="event.preventDefault();
                                        document.getElementById('delete-image').submit();">
                                    Delete
                                </a>
                            </div>
                        </div>
                    </span>
                </div>
                @empty
                <div class="text-center">
                    <span class="font-weight-bold text-warning">Image data is empty!</span>
                </div>
                @endforelse --}}
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