@extends('main.app', ['title' => 'ABOUT LAB'])

@section('content')
<div class="container-fluid vh-100 d-flex flex-column pt-5">
    <h5 class="font-weight-bold ml-5 pl-4 mt-5 mb-3 text-uppercase ls-sm">About Lab</h5>

    <div class="h-75">
        <div class="flexslider mt-5 py-5" id="about-slider">
            <ul class="slides">
                <li>
                    <div class="about-container">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-start justify-content-center">
                                <div id="carouselExampleSlidesOnly" class="carousel slide overflow-hidden"
                                    data-ride="carousel">
                                    <div class="carousel-inner image-box">
                                        <div class="carousel-item active image-box">
                                            <img src="{{ asset('storage/'. $page->images->first()->src) }}"
                                                class="d-block w-100 h-100">
                                        </div>
                                        @foreach ($page->images as $image)
                                        <div class="carousel-item image-box">
                                            <img src="{{ asset('storage/'.$image->src) }}" class="d-block w-100 h-100">
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8 mt-5 mt-lg-0">
                                <div class="d-lg-flex justify-content-around h-100">
                                    <div class="pre-line w-30 w-lg-100">
                                        {{ $page->left_description }}
                                    </div>
                                    <div class="pre-line w-30 w-lg-100 mt-lg-auto mt-4">
                                        {{ $page->right_description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="about-container">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-start justify-content-center">
                                <div id="carouselExampleSlidesOnly" class="carousel slide overflow-hidden"
                                    data-ride="carousel">
                                    <div class="carousel-item active image-box">
                                        <img src="{{ asset('storage/'.$page->images->reverse()->first()->src) }}"
                                            class="d-block w-100 h-100">
                                    </div>
                                    @foreach ($page->images->reverse() as $image)
                                    <div class="carousel-item image-box">
                                        <img src="{{ asset('storage/'.$image->src) }}" class="d-block w-100 h-100">
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="col-xl-7 offset-lg-1 mt-5 mt-lg-0 pre-line">
                                {{ $page->description }}
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

            <div class="custom-navigation">
                <a href="#" class="flex-prev-about text-black-transparant img-small">
                    <img src="{{asset('svg/back.svg')}}" alt="">
                </a>
                <div class="custom-controls-container"></div>
                <a href="#" class="flex-next-about text-black-transparant img-small">
                    <img src="{{asset('svg/next.svg')}}" alt="">
                </a>
            </div>
        </div>

        <div class="pl-4 ml-5 pb-4">
            <a href="{{ route('/') }}" class="text-decoration-none text-black h1 back-btn">L</a>
        </div>
    </div>
</div>
@endsection