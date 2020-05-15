@extends('main.app', ['title' => 'HOME'])

@section('content')

<div class="mx-3 my-3">
    <div class="flexslider slider-home ">
        <ul class="slides ">
            @foreach ($randomSlide as $slide)
            @include($slide)
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev">
                <i class="fas fa-chevron-left fa-2x"></i>
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next">
                <i class="fas fa-chevron-right fa-2x"></i>
            </a>
        </div>
    </div>
</div>

@endsection