<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Image;
use App\Page;
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

        return view('page.show_index', compact('page'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $rules = $request->validate([
            'left_description' => 'required'
        ]);

        $page->update($rules);

        return back();
    }

    public function updateImage()
    {
        $page = Page::find(11);

        $page->images()->sync(request('images'));

        return redirect(route('pages.about'));
    }

    public function deleteImage()
    {
        $page = Page::find(11);

        $page->images()->detach(request('images'));

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

    public function createProjectDetail(Page $page)
    {
        $images = Image::all();

        return view('page.create_project_detail', compact('page', 'images'));
    }

    public function storeProjectDetail(Page $page)
    {
        $data = request()->validate([
            'image_id' => 'required',
            'left_description' => 'required',
            'right_description' => 'required',
        ]);

        $page->projectDetails()->create($data);

        return redirect(route('pages.show', $page));
    }
}
