@extends('main.app', ['title' => 'HOME'])

@section('content')
@php

@endphp

<div class="mx-3 my-3">
    <div class="flexslider m-0">
        <ul class="slides">
            @foreach ($randomSlide->shuffle() as $slide)
            @include($slide)
            @endforeach
        </ul>
    </div>
</div>
@endsection