<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InvImage;
use Illuminate\Support\Str;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::where('src', 'LIKE', '%_thumb%')->get();

        return view('image.index', compact('images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $basename = Str::random();
        $originalPath = 'images/' . $basename . '.' . $request->image->getClientOriginalExtension();
        $thumbnailPath =  'images/' . $basename . '_thumb.' . $request->image->getClientOriginalExtension();

        ini_set('memory_limit', '256M');
        $thumbnail = InvImage::make($request->image);

        Image::create(['src' => $thumbnailPath]);

        if ($thumbnail->filesize() >= 1024000) {
            $thumbnail->resize(null, 800, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(public_path('storage/' . $thumbnailPath));
        } else {
            $thumbnail->resize(null, 1200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->save(public_path('storage/' . $thumbnailPath));
        }

        Image::create(['src' => $originalPath]);

        $request->image->move(public_path('storage/images'), $originalPath);

        session()->flash('message', 'Image successfully uploaded!');
        session()->flash('alert-class', 'alert-success');

        return redirect(route('images.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $thumbnailImg = explode('.', $image->src)[0] . '_thumb.' . explode('.', $image->src)[1];

        Storage::delete('/storage/' . $image->src);
        Storage::delete('/storage/' . $thumbnailImg);

        $image->delete();

        session()->flash('message', 'Image successfully deleted!');
        session()->flash('alert-class', 'alert-danger');

        return redirect(route('images.index'));
    }
}
