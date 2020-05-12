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
        $page = Page::find(10);
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
        if ($page->id > 9) {
            abort(404);
        }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $page->update($request->all());

        session()->flash('message', $page->title . ' Page successfully updated!');
        session()->flash('alert-class', 'alert-info');

        return back();
    }

    public function updateImage()
    {
        $page = Page::find(11);

        $page->images()->sync(request('images'));

        session()->flash('message', $page->title . ' Slider Image successfully updated!');
        session()->flash('alert-class', 'alert-info');

        return redirect(route('pages.about'));
    }

    public function deleteImage()
    {
        $page = Page::find(11);

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
        $page = Page::find(11);

        return view('page.show_main', compact('page'));
    }

    public function chooseImage()
    {
        $page = Page::find(11);
        $images = Image::all();

        return view('page.choose_image', compact('images', 'page'));
    }

    public function news()
    {
        $page = Page::find(12);

        return view('page.show_main', compact('page'));
    }

    public function inquiries()
    {
        $page = Page::find(13);

        return view('page.show_main', compact('page'));
    }
}
