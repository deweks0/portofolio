<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\PageDescription;
use Illuminate\Http\Request;

class PageDescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PageDescription  $pageDescription
     * @return \Illuminate\Http\Response
     */
    public function show(PageDescription $pageDescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PageDescription  $pageDescription
     * @return \Illuminate\Http\Response
     */
    public function edit(PageDescription $pageDescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PageDescription  $pageDescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, PageDescription $pageDescription)
    {
        $pageDescription->update(request('description'));

        session()->flash('message', $page->title . ' Page successfully updated!');
        session()->flash('alert-class', 'alert-info');

        if ($page->title == "News Update") {
            return redirect(route('pages.news'));
        } else if ($page->title == "About Lab") {
            return redirect(route('pages.about'));
        } else if ($page->title == "Inquiries") {
            return redirect(route('pages.inquiries'));
        } else {
            return redirect(route('pages.show', $page->id));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PageDescription  $pageDescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageDescription $pageDescription)
    {
        //
    }
}
