<li>
    <section class="grid">
        <div class="small-box project" id="slide-2-project-10">
            <a href="{{ route('project', 10) }}">
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
        <div class="small-box project" id="slide-2-project-1">
            <a href="{{ route('project', 1) }}">
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
        <div class="small-box project" id="slide-2-project-2">
            <a href="{{ route('project', 2) }}">
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
        <div class="small-box project" id="slide-2-project-3">
            <a href="{{ route('project', 3) }}">
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
        <div class="small-box project" id="slide-2-project-4">
            <a href="{{ route('project', 4) }}">
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
        <div class="small-box project" id="slide-2-project-5">
            <a href="{{ route('project', 5) }}">
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
        <div class="big-box project" id="slide-2-project-6">
            <a href="{{ route('project', 6) }}">
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

                <div class="project-hover project-hover-big position-absolute">
                    {{ $slideTwo->where('name', 'project_six')->first()->content }}
                </div>
            </a>
        </div>
        <div class="brand" id="slide-2-brand">
            <div>
                <a href="{{ route('about') }}"
                    class="w-100 h-100 text-decoration-none d-flex justify-content-center align-items-center bg-dark">
                    <div class="text-white ls-lg h1 mb-0 ml-2">
                        {{ $slideTwo->where('name', 'website_name')->first()->content }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('news') }}" class="w-100 h-100 text-decoration-none d-flex bg-black px-4 py-4">
                    <div class="text-white small font-weight-light">
                        {{ $slideTwo->where('name', 'website_info')->first()->content }}
                    </div>
                </a>
            </div>
        </div>
        <div class="small-box project bg-white" id="slide-2-inquiries">
            <a href="{{ route('inquiries') }}" class="nav-link w-100 h-100 text-black pre-line small mx-3 my-2">
                {{ $slideTwo->where('name', 'inquiries')->first()->content }}
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-7">
            <a href="{{ route('project', 7) }}">
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

                <div class="project-hover position-absolute">
                    {{ $slideTwo->where('name', 'project_seven')->first()->content }}
                </div>
            </a>
        </div>
        <div class="small-box project" id="slide-2-project-8">
            <a href="{{ route('project', 8) }}">
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
        <div class="small-box project" id="slide-2-project-9">
            <a href="{{ route('project', 9) }}">
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
    </section>
</li>