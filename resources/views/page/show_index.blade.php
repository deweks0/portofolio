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
                    <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-slide-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-slide-text-1-tab" data-toggle="tab"
                                    href="#tabs-slide-text-1" role="tab" aria-controls="tabs-slide-text-1"
                                    aria-selected="true">
                                    Slide 1
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-slide-text-2-tab" data-toggle="tab"
                                    href="#tabs-slide-text-2" role="tab" aria-controls="tabs-slide-text-2"
                                    aria-selected="false">
                                    Slide 2
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-slide-text-3-tab" data-toggle="tab"
                                    href="#tabs-slide-text-3" role="tab" aria-controls="tabs-slide-text-3"
                                    aria-selected="false">
                                    Slide 3
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="card shadow">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tabs-slide-text-1" role="tabpanel"
                                aria-labelledby="tabs-slide-text-1-tab">
                                <div class="d-flex flex-column border mb-4 rounded card-body">
                                    <section class="grid">
                                        <div class="brand">
                                            <div>
                                                Website Name
                                            </div>
                                            <div>
                                                Website Info
                                            </div>
                                        </div>
                                        <div class="small-box">
                                            Project 1
                                        </div>
                                        <div class="small-box">
                                            Project 2
                                        </div>
                                        <div class="big-box">
                                            Project 3
                                        </div>
                                        <div class="small-box">
                                            Project 4
                                        </div>
                                        <div class="small-box">
                                            News
                                        </div>
                                        <div class="small-box">
                                            About
                                        </div>
                                        <div class="small-box">
                                            Project 5
                                        </div>
                                        <div class="small-box">
                                            Project 6
                                        </div>
                                        <div class="small-box">
                                            Project 7
                                        </div>
                                        <div class="small-box">
                                            Project 8
                                        </div>
                                        <div class="small-box">
                                            Project 9
                                        </div>
                                    </section>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-1-content" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-1-content">
                                            <h4 class="mr-3 mb-0">Slide 1 Content (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="slider_id" value="1">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">
                                                    Save Slide Content
                                                </button>
                                            </div>
                                    </div>

                                    <div class="collapse show" id="slide-1-content">
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_name_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Name</label>
                                                        <input class="form-control" type="text"
                                                            name="website_name_content" id="website_name_content"
                                                            placeholder="Website Name"
                                                            value="{{ $slideOne->where('name', 'website_name')->first()->content }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_info_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Info</label>
                                                        <textarea name="website_info_content" id="website_info_content"
                                                            rows="5" class="form-control"
                                                            placeholder="Website Info">{{ $slideOne->where('name', 'website_info')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_one_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            1
                                                            Hover Content</label>
                                                        <textarea name="project_one_content" id="project_one_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_one')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_two_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            2
                                                            Hover Content</label>
                                                        <textarea name="project_two_content" id="project_two_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_two')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_three_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            3
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_three_content"
                                                            id="project_three_content" class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_three')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_four_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            4
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_four_content" id="project_four_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_four')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_five_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            5
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_five_content" id="project_five_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_five')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_six_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            6
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_six_content" id="project_six_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_six')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_seven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            7
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_seven_content"
                                                            id="project_seven_content" class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_seven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eight_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            8
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eight_content"
                                                            id="project_eight_content" class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_eight')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_nine_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            9
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_nine_content" id="project_nine_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_nine')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_ten_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            10
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_ten_content" id="project_ten_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_ten')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eleven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            11
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eleven_content"
                                                            id="project_eleven_content" class="form-control"
                                                            rows="5">{{ $slideOne->where('name', 'project_eleven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-1-images" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-1-images">
                                            <h4 class="mr-3 mb-0">Slide 1 Images (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update_slide') }}" method="POST">
                                            @csrf
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">Save Slide Images</button>
                                            </div>
                                    </div>

                                    <div class="collapse" id="slide-1-images">
                                        <div class="nav-wrapper">
                                            <ul class="nav nav-pills nav-fill flex-column flex-md-row"
                                                id="tabs-icons-slide" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3 active"
                                                        id="tabs-icons-slide-1-tab" data-toggle="tab"
                                                        href="#tabs-icons-slide-1" role="tab"
                                                        aria-controls="tabs-icons-slide-1" aria-selected="true">
                                                        Project 1
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-2-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-2" role="tab"
                                                        aria-controls="tabs-icons-slide-2" aria-selected="false">
                                                        Project 2
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-3-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-3" role="tab"
                                                        aria-controls="tabs-icons-slide-3" aria-selected="false">
                                                        Project 3
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-4-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-4" role="tab"
                                                        aria-controls="tabs-icons-slide-4" aria-selected="false">
                                                        Project 4
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-5-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-5" role="tab"
                                                        aria-controls="tabs-icons-slide-5" aria-selected="false">
                                                        Project 5
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-6-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-6" role="tab"
                                                        aria-controls="tabs-icons-slide-6" aria-selected="false">
                                                        Project 6
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-6 mb-md-3" id="tabs-icons-slide-7-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-7" role="tab"
                                                        aria-controls="tabs-icons-slide-7" aria-selected="false">
                                                        Project 7
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-8-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-8" role="tab"
                                                        aria-controls="tabs-icons-slide-8" aria-selected="false">
                                                        Project 8
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-9-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-9" role="tab"
                                                        aria-controls="tabs-icons-slide-9" aria-selected="false">
                                                        Project 9
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-10-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-10" role="tab"
                                                        aria-controls="tabs-icons-slide-10" aria-selected="false">
                                                        Project 10
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-11-tab"
                                                        data-toggle="tab" href="#tabs-icons-slide-11" role="tab"
                                                        aria-controls="tabs-icons-slide-11" aria-selected="false">
                                                        Project 11
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card shadow">
                                            <div class="tab-content" id="myTabContent-1">
                                                <div class="tab-pane fade show active" id="tabs-icons-slide-1"
                                                    role="tabpanel" aria-labelledby="tabs-icons-slide-1-tab">
                                                    <div class="card-body d-flex flex-wrap justify-content-around">
                                                        @forelse ($images as $image)
                                                        <div
                                                            class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                                                            <label for="image_page[1][image_id][{{$image->id}}]">
                                                                <img src="{{ asset('storage/' . $image->src) }}"
                                                                    class="w-100 h-150px rounded">
                                                            </label>
                                                            <div class="custom-control custom-radio">
                                                                <input class="custom-control-input" name="project_one"
                                                                    value="{{ $image->id }}"
                                                                    id="image_page[1][image_id][{{$image->id}}]"
                                                                    type="radio" @if(count($slideOne->where('name',
                                                                'project_one')->first()->images) == 0)
                                                                {{ '' }}
                                                                @else
                                                                {{ $slideOne->where('name', 'project_one')->first()->images()->first()->id == $image->id ? 'checked' : ''}}
                                                                @endif>
                                                                <label class="custom-control-label"
                                                                    for="image_page[1][image_id][{{$image->id}}]"></label>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        <div class="text-center">
                                                            <span class="font-weight-bold text-warning">Image
                                                                data is
                                                                empty!</span>
                                                        </div>
                                                        @endforelse
                                                        <input type="hidden" name="slider_id" value="1">
                                                    </div>
                                                </div>
                                                @include('page.partials.tab_image', ['id' => 2, 'slideName' =>
                                                'project_two', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 3, 'slideName' =>
                                                'project_three', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 4, 'slideName' =>
                                                'project_four', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 5, 'slideName' =>
                                                'project_five', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 6, 'slideName' =>
                                                'project_six', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 7, 'slideName' =>
                                                'project_seven', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 8, 'slideName' =>
                                                'project_eight', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 9, 'slideName' =>
                                                'project_nine', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 10, 'slideName' =>
                                                'project_ten', 'slideId' => 1])
                                                @include('page.partials.tab_image', ['id' => 11, 'slideName' =>
                                                'project_eleven', 'slideId' => 1])
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-slide-text-2" role="tabpanel"
                                aria-labelledby="tabs-slide-text-2-tab">
                                <div class="d-flex flex-column border mb-4 rounded card-body">
                                    <section class="grid">
                                        <div class="small-box">
                                            News
                                        </div>
                                        <div class="small-box">
                                            Project 1
                                        </div>
                                        <div class="small-box">
                                            Project 2
                                        </div>
                                        <div class="small-box">
                                            Project 3
                                        </div>
                                        <div class="small-box">
                                            Project 4
                                        </div>
                                        <div class="small-box">
                                            Project 5
                                        </div>
                                        <div class="big-box">
                                            Project 6
                                        </div>
                                        <div class="brand">
                                            <div>
                                                Website Name
                                            </div>
                                            <div>
                                                Website Info
                                            </div>
                                        </div>
                                        <div class="small-box">
                                            About
                                        </div>
                                        <div class="small-box">
                                            Project 7
                                        </div>
                                        <div class="small-box">
                                            Project 8
                                        </div>
                                        <div class="small-box">
                                            Project 9
                                        </div>
                                    </section>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-2-content" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-2-content">
                                            <h4 class="mr-3 mb-0">Slide 2 Content (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="slider_id" value="2">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">
                                                    Save Slide Content
                                                </button>
                                            </div>
                                    </div>

                                    <div class="collapse show" id="slide-2-content">
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_name_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Name</label>
                                                        <input class="form-control" type="text"
                                                            name="website_name_content" id="website_name_content"
                                                            placeholder="Website Name"
                                                            value="{{ $slideTwo->where('name', 'website_name')->first()->content }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_info_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Info</label>
                                                        <textarea name="website_info_content" id="website_info_content"
                                                            rows="5" class="form-control"
                                                            placeholder="Website Info">{{ $slideTwo->where('name', 'website_info')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_one_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            1
                                                            Hover Content</label>
                                                        <textarea name="project_one_content" id="project_one_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_one')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_two_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            2
                                                            Hover Content</label>
                                                        <textarea name="project_two_content" id="project_two_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_two')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_three_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            3
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_three_content"
                                                            id="project_three_content" class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_three')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_four_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            4
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_four_content" id="project_four_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_four')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_five_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            5
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_five_content" id="project_five_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_five')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_six_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            6
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_six_content" id="project_six_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_six')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_seven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            7
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_seven_content"
                                                            id="project_seven_content" class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_seven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eight_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            8
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eight_content"
                                                            id="project_eight_content" class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_eight')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_nine_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            9
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_nine_content" id="project_nine_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_nine')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_ten_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            10
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_ten_content" id="project_ten_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_ten')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eleven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            11
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eleven_content"
                                                            id="project_eleven_content" class="form-control"
                                                            rows="5">{{ $slideTwo->where('name', 'project_eleven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-2-images" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-2-images">
                                            <h4 class="mr-3 mb-0">Slide 2 Images (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update_slide') }}" method="POST">
                                            @csrf
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">Save Slide Images</button>
                                            </div>
                                    </div>

                                    <div class="collapse" id="slide-2-images">
                                        <div class="d-flex flex-column border mb-4 rounded card-body">
                                            <div class="nav-wrapper">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row"
                                                    id="tabs-icons-slide" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3 active"
                                                            id="tabs-icons-slide-14-tab" data-toggle="tab"
                                                            href="#tabs-icons-slide-14" role="tab"
                                                            aria-controls="tabs-icons-slide-14" aria-selected="true">
                                                            Project 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-15-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-15" role="tab"
                                                            aria-controls="tabs-icons-slide-15" aria-selected="false">
                                                            Project 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-16-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-16" role="tab"
                                                            aria-controls="tabs-icons-slide-16" aria-selected="false">
                                                            Project 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-17-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-17" role="tab"
                                                            aria-controls="tabs-icons-slide-17" aria-selected="false">
                                                            Project 4
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-18-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-18" role="tab"
                                                            aria-controls="tabs-icons-slide-18" aria-selected="false">
                                                            Project 5
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-19-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-19" role="tab"
                                                            aria-controls="tabs-icons-slide-19" aria-selected="false">
                                                            Project 6
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-6 mb-md-3" id="tabs-icons-slide-20-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-20" role="tab"
                                                            aria-controls="tabs-icons-slide-20" aria-selected="false">
                                                            Project 7
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-21-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-21" role="tab"
                                                            aria-controls="tabs-icons-slide-21" aria-selected="false">
                                                            Project 8
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-22-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-22" role="tab"
                                                            aria-controls="tabs-icons-slide-22" aria-selected="false">
                                                            Project 9
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-23-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-23" role="tab"
                                                            aria-controls="tabs-icons-slide-23" aria-selected="false">
                                                            Project 10
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-24-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-24" role="tab"
                                                            aria-controls="tabs-icons-slide-24" aria-selected="false">
                                                            Project 11
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card shadow">
                                                <div class="tab-content" id="myTabContent-2">
                                                    <div class="tab-pane fade show active" id="tabs-icons-slide-14"
                                                        role="tabpanel" aria-labelledby="tabs-icons-slide-14-tab">
                                                        <div class="card-body d-flex flex-wrap justify-content-around">
                                                            @forelse ($images as $image)
                                                            <div
                                                                class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                                                                <label for="image_page[14][image_id][{{$image->id}}]">
                                                                    <img src="{{ asset('storage/' . $image->src) }}"
                                                                        class="w-100 h-150px rounded">
                                                                </label>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input"
                                                                        name="project_one" value="{{ $image->id }}"
                                                                        id="image_page[14][image_id][{{$image->id}}]"
                                                                        type="radio" @if(count($slideTwo->where('name',
                                                                    'project_one')->first()->images) == 0)
                                                                    {{ '' }}
                                                                    @else
                                                                    {{ $slideTwo->where('name', 'project_one')->first()->images()->first()->id == $image->id ? 'checked' : ''}}
                                                                    @endif>
                                                                    <label class="custom-control-label"
                                                                        for="image_page[14][image_id][{{$image->id}}]"></label>
                                                                </div>
                                                            </div>
                                                            @empty
                                                            <div class="text-center">
                                                                <span class="font-weight-bold text-warning">Image
                                                                    data is
                                                                    empty!</span>
                                                            </div>
                                                            @endforelse
                                                            <input type="hidden" name="slider_id" value="2">
                                                        </div>
                                                    </div>
                                                    @include('page.partials.tab_image', ['id' => 15, 'slideName' =>
                                                    'project_two', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 16, 'slideName' =>
                                                    'project_three', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 17, 'slideName' =>
                                                    'project_four', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 18, 'slideName' =>
                                                    'project_five', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 19, 'slideName' =>
                                                    'project_six', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 20, 'slideName' =>
                                                    'project_seven', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 21, 'slideName' =>
                                                    'project_eight', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 22, 'slideName' =>
                                                    'project_nine', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 23, 'slideName' =>
                                                    'project_ten', 'slideId' => 2])
                                                    @include('page.partials.tab_image', ['id' => 24, 'slideName' =>
                                                    'project_eleven', 'slideId' => 2])
                                                </div>

                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="tabs-slide-text-3" role="tabpanel"
                                aria-labelledby="tabs-slide-text-3-tab">
                                <div class="d-flex flex-column border mb-4 rounded card-body">
                                    <section class="grid">
                                        <div class="big-box">
                                            Project 1
                                        </div>
                                        <div class="small-box">
                                            Project 2
                                        </div>
                                        <div class="small-box">
                                            News
                                        </div>
                                        <div class="small-box">
                                            About
                                        </div>
                                        <div class="small-box">
                                            Project 3
                                        </div>
                                        <div class="small-box">
                                            Project 4
                                        </div>
                                        <div class="small-box">
                                            Project 5
                                        </div>
                                        <div class="small-box">
                                            Project 6
                                        </div>
                                        <div class="brand">
                                            <div>
                                                Website Name
                                            </div>
                                            <div>
                                                Website Info
                                            </div>
                                        </div>
                                        <div class="small-box">
                                            Project 7
                                        </div>
                                        <div class="small-box">
                                            Project 8
                                        </div>
                                        <div class="small-box">
                                            Project 9
                                        </div>
                                    </section>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-3-content" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-3-content">
                                            <h4 class="mr-3 mb-0">Slide 3 Content (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="slider_id" value="3">
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">
                                                    Save Slide Content
                                                </button>
                                            </div>
                                    </div>

                                    <div class="collapse show" id="slide-3-content">
                                        <div class="card-body border">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_name_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Name</label>
                                                        <input class="form-control" type="text"
                                                            name="website_name_content" id="website_name_content"
                                                            placeholder="Website Name"
                                                            value="{{ $slideThree->where('name', 'website_name')->first()->content }}">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="website_info_content"
                                                            class="badge badge-success badge-circle w-auto">Website
                                                            Info</label>
                                                        <textarea name="website_info_content" id="website_info_content"
                                                            rows="5" class="form-control"
                                                            placeholder="Website Info">{{ $slideThree->where('name', 'website_info')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_one_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            1
                                                            Hover Content</label>
                                                        <textarea name="project_one_content" id="project_one_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_one')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_two_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            2
                                                            Hover Content</label>
                                                        <textarea name="project_two_content" id="project_two_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_two')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_three_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            3
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_three_content"
                                                            id="project_three_content" class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_three')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_four_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            4
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_four_content" id="project_four_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_four')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_five_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            5
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_five_content" id="project_five_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_five')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_six_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            6
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_six_content" id="project_six_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_six')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_seven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            7
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_seven_content"
                                                            id="project_seven_content" class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_seven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eight_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            8
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eight_content"
                                                            id="project_eight_content" class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_eight')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_nine_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            9
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_nine_content" id="project_nine_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_nine')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_ten_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            10
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_ten_content" id="project_ten_content"
                                                            class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_ten')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="project_eleven_content"
                                                            class="badge badge-success badge-circle w-auto">Project
                                                            11
                                                            Hover
                                                            Content</label>
                                                        <textarea name="project_eleven_content"
                                                            id="project_eleven_content" class="form-control"
                                                            rows="5">{{ $slideThree->where('name', 'project_eleven')->first()->content }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                    <div
                                        class="d-flex justify-content-between align-items-center card-body border mt-4">
                                        <a href="#slide-3-images" data-toggle="collapse" role="button"
                                            aria-expanded="true" aria-controls="slide-3-images">
                                            <h4 class="mr-3 mb-0">Slide 3 Images (click to collapse)</h4>
                                        </a>
                                        <form action="{{ route('slides.update_slide') }}" method="POST">
                                            @csrf
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">Save Slide Images</button>
                                            </div>
                                    </div>

                                    <div class="collapse" id="slide-3-images">
                                        <div class="d-flex flex-column border mb-4 rounded card-body">
                                            <div class="nav-wrapper">
                                                <ul class="nav nav-pills nav-fill flex-column flex-md-row"
                                                    id="tabs-icons-slide" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3 active"
                                                            id="tabs-icons-slide-27-tab" data-toggle="tab"
                                                            href="#tabs-icons-slide-27" role="tab"
                                                            aria-controls="tabs-icons-slide-27" aria-selected="true">
                                                            Project 1
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-28-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-28" role="tab"
                                                            aria-controls="tabs-icons-slide-28" aria-selected="false">
                                                            Project 2
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-29-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-29" role="tab"
                                                            aria-controls="tabs-icons-slide-29" aria-selected="false">
                                                            Project 3
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-30-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-30" role="tab"
                                                            aria-controls="tabs-icons-slide-30" aria-selected="false">
                                                            Project 4
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-31-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-31" role="tab"
                                                            aria-controls="tabs-icons-slide-31" aria-selected="false">
                                                            Project 5
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-32-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-32" role="tab"
                                                            aria-controls="tabs-icons-slide-32" aria-selected="false">
                                                            Project 6
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-6 mb-md-3" id="tabs-icons-slide-33-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-33" role="tab"
                                                            aria-controls="tabs-icons-slide-33" aria-selected="false">
                                                            Project 7
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-34-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-34" role="tab"
                                                            aria-controls="tabs-icons-slide-34" aria-selected="false">
                                                            Project 8
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-35-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-35" role="tab"
                                                            aria-controls="tabs-icons-slide-35" aria-selected="false">
                                                            Project 9
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-36-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-36" role="tab"
                                                            aria-controls="tabs-icons-slide-36" aria-selected="false">
                                                            Project 10
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link mb-sm-3 mb-md-3" id="tabs-icons-slide-37-tab"
                                                            data-toggle="tab" href="#tabs-icons-slide-37" role="tab"
                                                            aria-controls="tabs-icons-slide-37" aria-selected="false">
                                                            Project 11
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card shadow">
                                                <div class="tab-content" id="myTabContent-3">
                                                    <div class="tab-pane fade show active" id="tabs-icons-slide-27"
                                                        role="tabpanel" aria-labelledby="tabs-icons-slide-27-tab">
                                                        <div class="card-body d-flex flex-wrap justify-content-around">
                                                            @forelse ($images as $image)
                                                            <div
                                                                class="w-25 mx-2 mb-4 d-flex flex-column align-items-center">
                                                                <label for="image_page[27][image_id][{{$image->id}}]">
                                                                    <img src="{{ asset('storage/' . $image->src) }}"
                                                                        class="w-100 h-150px rounded">
                                                                </label>
                                                                <div class="custom-control custom-radio">
                                                                    <input class="custom-control-input"
                                                                        name="project_one" value="{{ $image->id }}"
                                                                        id="image_page[27][image_id][{{$image->id}}]"
                                                                        type="radio"
                                                                        @if(count($slideThree->where('name',
                                                                    'project_one')->first()->images) == 0)
                                                                    {{ '' }}
                                                                    @else
                                                                    {{ $slideThree->where('name', 'project_one')->first()->images()->first()->id == $image->id ? 'checked' : ''}}
                                                                    @endif>
                                                                    <label class="custom-control-label"
                                                                        for="image_page[27][image_id][{{$image->id}}]"></label>
                                                                </div>
                                                            </div>
                                                            @empty
                                                            <div class="text-center">
                                                                <span class="font-weight-bold text-warning">Image
                                                                    data is
                                                                    empty!</span>
                                                            </div>
                                                            @endforelse
                                                            <input type="hidden" name="image_page[27][slide_name]"
                                                                value="website_name">
                                                            <input type="hidden" name="image_page[27][slide_id]"
                                                                value="3">
                                                        </div>
                                                    </div>
                                                    @include('page.partials.tab_image', ['id' => 28, 'slideName' =>
                                                    'project_two', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 29, 'slideName' =>
                                                    'project_three', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 30, 'slideName' =>
                                                    'project_four', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 31, 'slideName' =>
                                                    'project_five', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 32, 'slideName' =>
                                                    'project_six', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 33, 'slideName' =>
                                                    'project_seven', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 34, 'slideName' =>
                                                    'project_eight', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 35, 'slideName' =>
                                                    'project_nine', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 36, 'slideName' =>
                                                    'project_ten', 'slideId' => 3])
                                                    @include('page.partials.tab_image', ['id' => 37, 'slideName' =>
                                                    'project_eleven', 'slideId' => 3])

                                                </div>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
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