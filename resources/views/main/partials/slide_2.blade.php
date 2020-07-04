<li>
    <section class="grid">
        <div class="small-box project" id="slide-2-project-10">
            <a href="{{ route('project', 11) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_one')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_one')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_one')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-1">
            <a href="{{ route('project', 12) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_two')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_two')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_two')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-2">
            <a href="{{ route('project', 13) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_three')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_three')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_three')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-3">
            <a href="{{ route('project', 14) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_four')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_four')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_four')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-4">
            <a href="{{ route('project', 15) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_five')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_five')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_five')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-5">
            <a href="{{ route('project', 16) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_six')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_six')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_six')->first()->content }}
                </div>
            </a>
        </div>
        <div class="big-box project" id="slide-2-project-6">
            <a href="{{ route('project', 17) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_seven')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_seven')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover project-hover-big position-absolute">
                    {{ $slideTwo->where('name', 'project_seven')->first()->content }}
                </div>
            </a>
        </div>
        <div class="brand" id="slide-2-brand">
            <div>
                <a href="{{ route('about') }}"
                    class="w-100 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svg/LAB LOGO.png') }}" class="w-100 h-100">
                </a>
            </div>
            <div>
                <a href="{{ route('news') }}"
                    class="w-100 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svg/LAB NEWS.png') }}" class="w-100 h-100">
                </a>
            </div>
        </div>
        <div class="brand" id="slide-2-inquiries">
            <div>
                <a href="{{ route('inquiries') }}"
                    class="w-100 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svg/LAB INQUIRIES.png') }}" class="w-100 h-100">
                </a>
            </div>
            <div>
                <a href="https://www.instagram.com/explore/tags/localarchitecturebureau/" target="_blank"
                    class="w-100 h-100 overflow-hidden d-flex justify-content-center align-items-center">
                    <img src="{{ asset('svg/LAB MEDIA.png') }}" class="w-100 h-100">
                </a>
            </div>
        </div>
        <div class="small-box project" id="slide-2-project-7">
            <a href="{{ route('project', 18) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_eight')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_eight')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_eight')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-8">
            <a href="{{ route('project', 19) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_nine')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_nine')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_nine')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-9">
            <a href="{{ route('project', 20) }}">
                <div class="carousel slide h-100" data-ride="carousel">
                    <div class="carousel-inner h-100">
                        <div class="carousel-item active h-100">
                            <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_ten')->first()->images()->first()->src) }}"
                                alt="">
                        </div>
                        @foreach ($slideTwo->where('name', 'project_ten')->first()->images->skip(1) as $image)
                        <div class="carousel-item h-100">
                            <img src="{{ asset('storage/' . $image->src) }}" class="img-fluid">
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_ten')->first()->content }}
                </div>
            </a>
        </div>
    </section>
</li>