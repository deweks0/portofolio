@extends('main.app', ['title' => 'HOME'])

@section('content')

<div class="mx-3 my-3">
    <div class="flexslider m-0">
        <ul class="slides">
            @foreach ($randomSlide as $slide)
            @include($slide)
            @endforeach
        </ul>
    </div>
    <div class="custom-navigation">
        <a href="#" class="flex-prev">Prev</a>
    </div>
    <div class="custom-navigation">
        <a href="#" class="flex-next">Next</a>
    </div>
</div>
@endsection