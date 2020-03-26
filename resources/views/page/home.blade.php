@foreach ($images as $image)
<div style="display: inline">

    <img src="{{ asset('storage/'.$image->src) }}" alt="" width="200s">
    <form action="{{ route('imageUpdate',$image->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <input type="file" src="{{ asset('storage/'.$image->src) }}" name="image" alt="">
        <button type="submit">edit</button>
    </form>
</div>
@endforeach