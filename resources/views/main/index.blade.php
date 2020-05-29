@extends('main.app', ['title' => 'HOME'])

@section('content')

<div class="mx-4 mt-3">
    <div class="flexslider slider-home m-0" id="home-slider">
        <ul class="slides ">
            @foreach ($randomSlide as $slide)
            @include($slide)
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev text-black-transparant img-small">
                {{-- <i class="fas fa-chevron-left fa-3x"></i> --}}
            <img src="{{asset('svg/back.svg')}}" alt="">
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next text-black-transparant  img-small">
            <img src="{{asset('svg/next.svg')}}" alt="">
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <!-- for icon -->
    </div>
</div>

@endsection