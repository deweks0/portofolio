<li>
    <section class="grid">
        <div class="small-box bg-white">
            <div class="h-100">
                <a href="{{ route('news') }}" style="white-space: pre-line"
                    class="d-flex text-dark text-decoration-none w-100 h-100 px-4 small">
                    {{ $slideTwo->where('name', 'news')->first()->description }}
                </a>
            </div>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 1) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_one')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_one')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_one')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 2) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_two')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_two')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_two')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 3) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_three')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_three')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_three')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 4) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_four')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_four')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_four')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 5) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_five')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_five')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_five')->first()->description }}
                </span>
            </a>
        </div>
        <div class="big-box project">
            <a href="{{ route('project', 6) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_six')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_six')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 5%; top: 5%; width: 15%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_six')->first()->description }}
                </span>
            </a>
        </div>
        <div class="brand">
            <div>
                <a href="#"
                    class="w-100 h-100 text-decoration-none d-flex justify-content-center align-items-center bg-black">
                    <div class="text-white ls-lg h1 mb-0 ml-2">
                        {{ $slideTwo->where('name', 'website_name')->first()->description }}</div>
                </a>
            </div>
            <div>
                <a href="{{ route('inquiries') }}" class="w-100 h-100 text-decoration-none d-flex bg-black px-4 py-4">
                    <div class="text-white small font-weight-light">
                        {{ $slideTwo->where('name', 'website_info')->first()->description }}
                    </div>
                </a>
            </div>
        </div>
        <div class="small-box bg-white">
            <div class="h-100">
                <a href="{{ route('about') }}" style="white-space: pre-line"
                    class="d-flex text-dark text-decoration-none w-100 h-100 px-4 small">
                    {{ $slideTwo->where('name', 'about')->first()->description }}
                </a>
            </div>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 7) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_seven')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_seven')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_seven')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 8) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_eight')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_eight')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_eight')->first()->description }}
                </span>
            </a>
        </div>
        <div class="small-box project">
            <a href="{{ route('project', 9) }}">
                <img src="{{ asset('storage/' . $slideTwo->where('name', 'project_nine')->first()->images()->first()->src) }}"
                    alt="">
                <div class="project-hover position-absolute bg-black">
                    {{ $slideTwo->where('name', 'project_nine')->first()->content }}
                </div>
                <span class="position-absolute text-right small text-white ls-sm"
                    style="right: 7%; top: 5%; width: 30%; text-shadow: 2px 2px 5px #000">
                    {{ $slideTwo->where('name', 'project_nine')->first()->description }}
                </span>
            </a>
        </div>
    </section>
</li>