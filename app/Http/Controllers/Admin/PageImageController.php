<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageImageController extends Controller
{
    public function detail()
    {
        # code...
    }
    public function home()
    {
        $images = Image::all();
        return view('page.home', compact('images'));
    }
    public function UpdateImage(Request $request, Image $image)
    {
        // return 'ok';
        // die;
        // ddd($request->);
        Storage::delete('public/', $image->src);
        Storage::putFile('public/', $request->file('image'));
        $image->update(['src' => $request->file('image')->hashName()]);
        return redirect()->back();
    }
}
