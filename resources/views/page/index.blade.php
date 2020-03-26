<ul>
{{-- {{  }} --}}
    @forelse ($pages as $page)
    <li> 
    <a href="{{ route($page->title) }}">{{ $page->title }}</a>
    </li>
    @empty
    page is empty
    @endforelse
</ul>