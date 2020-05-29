@extends('main.app', ['title' => 'ABOUT LAB'])

@section('content')
<div class="container-fluid h-100v d-flex flex-column">
    <h5 class="font-weight-bold ml-5 pl-4 my-5 text-uppercase ls-sm">About Lab</h5>
    <div class="row h-75">
        <div class="col-lg-12">
            <div class="flexslider my-5 py-5" id="about-slider">
                <ul class="slides">
                    <li>
                        <div class="row">
                            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                                <div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
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
                            <div class="col-lg-6 mt-5 mt-lg-0">
                                <div class="d-lg-flex justify-content-between h-100">
                                    <div class="pre-line w-25 w-lg-100">
                                        {{ $page->left_description }}
                                    </div>
                                    <div class="pre-line w-25 w-lg-100 mt-lg-auto mt-4">
                                        {{ $page->right_description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="row">
                            <div class="col-lg-5 d-flex align-items-center justify-content-center">
                                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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

                            <div class="col-lg-6 mt-5 mt-lg-0 pre-line">
                                {{ $page->description }}
                            </div>
                        </div>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="custom-controls-container"></div>
        </div>
    </div>

    <div class="pl-4 ml-5">
        <a href="{{ route('/') }}" class="text-decoration-none text-black">home</a>
        <p class="text-muted">back to home</p>
    </div>
</div>
@endsection