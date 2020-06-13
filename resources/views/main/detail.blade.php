@extends('main.app', ['title' => 'PROJECT'])

@section('content')
<div class="pt-5 mx-6 mb-3">
    <div class="ml-3 mt-4 mb-3">
        <a href="{{ route('/') }}" class="text-decoration-none text-black h1 back-btn">L</a>
    </div>

    <div class="flexslider pt-5" id="detail-slider">
        <ul class="slides">
            <li>
                <div class="project-container">
                    <div class="project-desc container-fluid">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="w-50 w-lg-100">
                                    <p class="pre-line">
                                        {{ $page->projectDetails->first()->left_description }}
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-7 mt-2 text-justify">
                                <p class="pre-line">
                                    {{ $page->projectDetails->first()->right_description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            @foreach ($page->projectDetails as $projectDetail)
            <li>
                <div class="project-container">
                    <img src="{{ asset('storage/'.$projectDetail->image->src) }}" class="project-container-img">
                </div>
            </li>
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev-home text-black-transparant img-small">
                <img src="{{ asset('svg/back.svg') }}" alt="back">
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next-home text-black-transparant  img-small">
                <img src="{{ asset('svg/next.svg') }}" alt="next">
            </a>
        </div>
    </div>
</div>
@endsection