@extends('main.app', ['title' => 'HOME'])

@section('content')
<div class="home-container">
    <div class="flexslider slider-home m-0" id="home-slider">
        <ul class="slides">
            @foreach ($randomSlide as $slide)
            @include($slide)
            @endforeach
        </ul>
        <div class="custom-navigation">
            <a href="#" class="flex-prev flex-prev-home text-black-transparant img-small">
                <img src="{{ asset('svg/back.svg') }}" alt="back">
            </a>
            <div class="custom-controls-container"></div>
            <a href="#" class="flex-next flex-next-home text-black-transparant img-small">
                <img src="{{ asset('svg/next.svg') }}" alt="next">
            </a>
        </div>
    </div>

    <div class="mt-4 mx-1 mb-3 d-flex justify-content-between">
        <div>
            <span>Search</span>
            <input type="text" class="ml-2 search-input">
        </div>

        <div>
            <a href="#" target="_blank">
                <img src="{{ asset('svg/instagram.svg') }}" alt="instagram" class="social-media">
            </a>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    let randomDuration = 5000;
</script>
@endpush