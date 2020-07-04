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

                    <div class="d-flex flex-column border mb-3 rounded card-body">
                        <div class="d-flex mb-4">
                            <h4 class="mr-3 mb-0">Slider Images</h4>
                            <a href="{{ route('pages.choose_image', 32) }}" class="btn btn-sm btn-primary">Choose
                                Image</a>
                        </div>

                        <hr class="m-0 border">

                        <div class="d-flex flex-wrap mt-3">
                            @forelse ($page->images as $image)
                            <div class="w-25 mr-2 mb-2">
                                <img src="{{ asset('storage/'.$image->src) }}" class="w-100 h-150px rounded">
                            </div>
                            @empty
                            <div class="text-red text-sm font-weight-bold">Slider image is empty!</div>
                            @endforelse
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center card-body border mt-4">
                        <a href="#slide-1-content" data-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="slide-1-content">
                            <h4 class="mr-3 mb-0">Slide 1 Content (click to collapse)</h4>
                        </a>
                    </div>

                    <div class="collapse" id="slide-1-content">
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
                                        rows="20">{{$page->pageDescriptions->where('description_type', 'main')->first()->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center card-body border mt-4">
                        <a href="#slide-2-content" data-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="slide-2-content">
                            <h4 class="mr-3 mb-0">Slide 2 Content (click to collapse)</h4>
                        </a>

                    </div>

                    <div class="collapse" id="slide-2-content">
                        <div class="card-body border">
                            <form
                                action="{{ route('pageDescriptions.update', [$page->id, $page->pageDescriptions->where('description_type', 'left')->first()->id ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="description">Left Description</label>
                                    <textarea name="description[description]" id="description" class="form-control"
                                        cols="30"
                                        rows="15">{{ $page->pageDescriptions->where('description_type', 'left')->first()->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>

                            <form
                                action="{{ route('pageDescriptions.update', [$page->id, $page->pageDescriptions->where('description_type', 'right')->first()->id ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mt-3">
                                    <label for="description">Right Description</label>
                                    <textarea name="description[description]" id="description" class="form-control"
                                        cols="30"
                                        rows="15">{{ $page->pageDescriptions->where('description_type', 'right')->first()->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center card-body border mt-4">
                        <a href="#slide-3-content" data-toggle="collapse" role="button" aria-expanded="true"
                            aria-controls="slide-3-content">
                            <h4 class="mr-3 mb-0">Slide 3 Content (click to collapse)</h4>
                        </a>
                    </div>

                    <div class="collapse" id="slide-3-content">
                        <div class="card-body border">
                            <form
                                action="{{ route('pageDescriptions.update', [$page->id, $page->pageDescriptions->where('description_type', 'optional_left')->first()->id ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="description">Left Description</label>
                                    <textarea name="description[description]" id="description" class="form-control"
                                        cols="30"
                                        rows="15">{{  $page->pageDescriptions->where('description_type', 'optional_left')->first()->description }}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                            </form>

                            <form
                                action="{{ route('pageDescriptions.update', [$page->id, $page->pageDescriptions->where('description_type', 'optional_right')->first()->id ]) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group mt-3">
                                    <label for="description">Right Description</label>
                                    <textarea name="description[description]" id="description" class="form-control"
                                        cols="30"
                                        rows="15">{{ $page->pageDescriptions->where('description_type', 'optional_right')->first()->description }}</textarea>
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
</div>

<!-- Footer -->
@include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush