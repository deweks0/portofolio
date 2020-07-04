@extends('main.app', ['title' => $page->title . ' | LAB'])

@section('content')
<div class="detail-wrapper mx-6 mb-3">
    <div class="flexslider detail-slider" id="detail-slider">
        <ul class="slides">
            <li>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="w-50 w-lg-100">
                                <p class="pre-line project-desc xl:h5">
                                    {{ $page->pageDescriptions->where('description_type', 'left')->first()->description }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 mt-2 text-justify">
                            <p class="pre-line project-desc xl:h5">
                                {{ $page->pageDescriptions->where('description_type', 'right')->first()->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            @foreach ($page->images as $image)
            <li>
                <div class="project-container">
                    <img src="{{ asset('storage/'.$image->src) }}">
                </div>
            </li>
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev flex-prev-home text-black-transparant img-small">
                <img src="{{ asset('svg/back.svg') }}" alt="back" id="btn-prev">
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next flex-next-home text-black-transparant img-small">
                <img src="{{ asset('svg/next.svg') }}" alt="next" id="btn-next">
            </a>
        </div>
    </div>

    <div class="back-fixed">
        <p id="slide-info" class="h5 mb-3"></p>
        <a href="{{ route('/') }}">
            <img src="{{ asset('storage/images/BACK.png') }}" class="back-btn" alt="back-btn">
        </a>
    </div>
</div>
@endsection