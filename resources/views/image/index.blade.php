@forelse ($images as $image)
<div style="background:#eee; padding:1rem; display:inline;">
    <img src="{{asset('storage/'.$image->src)}}" alt="" width="100">
<form action="{{ route('images.destroy',$image->id) }}" method="POST">
@csrf
@method('DELETE')
<button type="submit">DElete</button>
</form>
</div>

@empty
    img is empty
@endforelse