@extends('main.app', ['title' => 'About | LAB'])

@section('content')
<div class="container-fluid d-flex flex-column about-wrapper">
    <h5 class="font-weight-bold m-0 ml-5 mt-4 pl-4 text-uppercase ls-sm">About Lab</h5>

    <div class="flexslider about-container m-0" id="about-slider">
        <ul class="slides">
            <li>
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-xl-3 about-slide d-flex align-items-start justify-content-center">
                            <div class="carousel slide w-100" data-ride="carousel" id="carousel-1"
                                data-interval="false">
                                <div class="carousel-inner w-100">
                                    <div class="carousel-item w-100 active">
                                        <img src="{{ asset('storage/'.$page->images->first()->src) }}" alt="">
                                    </div>
                                    @foreach ($page->images->take($imagePerSlide)->skip(1) as $image)
                                    <div class="carousel-item w-100">
                                        <img src="{{ asset('storage/'.$image->src) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-next w-100 h-100" href="#carousel-1" role="button"
                                    data-slide="next">
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-8 offset-lg-1 mt-5 mt-lg-0 pre-line text-justify about-desc">
                            {{ $page->pageDescriptions->where('description_type', 'main')->first()->description }}
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-xl-3 about-slide d-flex align-items-start justify-content-center">
                            <div class="carousel slide w-100" data-ride="carousel" id="carousel-2"
                                data-interval="false">
                                <div class="carousel-inner w-100">
                                    <div class="carousel-item w-100 active">
                                        <img src="{{ asset('storage/'.$page->images->skip($imagePerSlide)->first()->src) }}"
                                            alt="">
                                    </div>
                                    @foreach ($page->images->skip($imagePerSlide)->take($imagePerSlide)->skip(1) as
                                    $image)
                                    <div class="carousel-item w-100">
                                        <img src="{{ asset('storage/'.$image->src) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-next w-100 h-100" href="#carousel-2" role="button"
                                    data-slide="next">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 offset-lg-1 mt-5 mt-lg-0">
                            <div class="d-lg-flex justify-content-around h-100">
                                <div class="pre-line w-30 text-justify about-desc w-lg-100">
                                    {{ $page->pageDescriptions->where('description_type', 'left')->first()->description }}
                                </div>
                                <div class="pre-line w-30 text-justify about-desc w-lg-100 mt-4">
                                    {{ $page->pageDescriptions->where('description_type', 'right')->first()->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li>
                <div class="container-fluid px-5">
                    <div class="row">
                        <div class="col-xl-3 about-slide d-flex align-items-start justify-content-center">
                            <div class="carousel slide w-100" data-ride="carousel" id="carousel-3"
                                data-interval="false">
                                <div class="carousel-inner w-100">
                                    <div class="carousel-item w-100 active">
                                        <img src="{{ asset('storage/'.$page->images->skip(($imagePerSlide*2))->first()->src) }}"
                                            alt="">
                                    </div>
                                    @foreach ($page->images->skip(($imagePerSlide*2))->take($imagePerSlide)->skip(1) as
                                    $image)
                                    <div class="carousel-item w-100">
                                        <img src="{{ asset('storage/'.$image->src) }}" alt="">
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-next w-100 h-100" href="#carousel-3" role="button"
                                    data-slide="next">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 offset-lg-1 mt-5 mt-lg-0">
                            <div class="d-lg-flex justify-content-around h-100">
                                <div class="pre-line w-30 text-justify about-desc w-lg-100">
                                    {{ $page->pageDescriptions->where('description_type', 'optional_left')->first()->description }}
                                </div>
                                <div class="pre-line w-30 text-justify about-desc w-lg-100 mt-4">
                                    {{ $page->pageDescriptions->where('description_type', 'optional_right')->first()->description }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

        <div class="custom-navigation">
            <a href="#" class="flex-prev flex-prev-about text-black-transparant img-small">
                <img src="{{asset('svg/back.svg')}}" alt="">
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next flex-next-about text-black-transparant img-small">
                <img src="{{asset('svg/next.svg')}}" alt="">
            </a>
        </div>
    </div>

    <div class="back-fixed">
        <a href="{{ route('/') }}">
            <img src="{{ asset('storage/images/BACK.png') }}" class="back-btn" alt="back-btn">
        </a>
    </div>
</div>
@endsection