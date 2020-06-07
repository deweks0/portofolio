<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::all();
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
        $path = $request->image->store('images', 'public_uploads');

        Image::create(['src' => $path]);

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
        Storage::delete('/storage/' . $image->src);

        $image->delete();

        session()->flash('message', 'Image successfully deleted!');
        session()->flash('alert-class', 'alert-danger');

        return redirect(route('images.index'));
    }
}
