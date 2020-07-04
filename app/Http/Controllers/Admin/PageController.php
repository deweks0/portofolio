<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use App\Page;
use App\ProjectDetail;
use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = Page::where('title', 'LIKE', '%home%')->first();
        $images = Image::all();
        $slideOne = Slide::with('images')->where('slider_id', 1)->get();
        $slideTwo = Slide::with('images')->where('slider_id', 2)->get();
        $slideThree = Slide::with('images')->where('slider_id', 3)->get();

        return view('page.show_index', compact(
            'page',
            'images',
            'slideOne',
            'slideTwo',
            'slideThree'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = $request->validate([
            'left_description' => 'required',
            'right_description' => 'required'
        ]);
        Page::create($rules);
        return redirect(route('pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        return view('page.show', compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('page.edit', compact('page'));
    }

    public function updateImage(Page $page)
    {
        $page->images()->sync(request('images'));

        session()->flash('message', $page->title . ' Slider Image successfully updated!');
        session()->flash('alert-class', 'alert-info');

        if ($page->id == 32) {
            return redirect(route('pages.about'));
        } else {
            return redirect(route('pages.show', $page->id));
        }
    }

    public function deleteImage()
    {
        $page = Page::where('title', 'LIKE', '%about%')->first();

        $page->images()->detach(request('images'));
        session()->flash('alert-class', 'alert-danger');

        return redirect(route('pages.about'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        $page->delete();
    }

    public function about()
    {
        $page = Page::where('title', 'LIKE', '%about%')->first()->load('images');

        return view('page.show_about', compact('page'));
    }

    public function chooseImage(Page $page)
    {
        $images = Image::all();

        return view('page.choose_image', compact('images', 'page'));
    }

    public function news()
    {
        $page = Page::where('title', 'LIKE', '%news%')->first();

        return view('page.show_main', compact('page'));
    }

    public function inquiries()
    {
        $page =  Page::where('title', 'LIKE', '%inquiries%')->first();

        return view('page.show_main', compact('page'));
    }
}
