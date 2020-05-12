<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use App\Image;
use App\ProjectDetail;
use Illuminate\Http\Request;

class ProjectDetailController extends Controller
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
    public function create(Page $page)
    {
        $images = Image::all();

        return view('page.create_project_detail', compact('page', 'images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    {
        $data = request()->validate([
            'image_id' => 'required',
            'left_description' => 'required',
            'right_description' => 'required',
        ]);

        $page->projectDetails()->create($data);

        session()->flash('message', 'Project Detail successfully created!');
        session()->flash('alert-class', 'alert-success');

        return redirect(route('pages.show', $page));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProjectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectDetail $projectDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProjectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectDetail $projectDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProjectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page, ProjectDetail $projectDetail)
    {
        $projectDetail->update(request()->all());

        session()->flash('message', 'Project Detail successfully updated!');
        session()->flash('alert-class', 'alert-info');

        return back();
    }

    public function editImage(Page $page, ProjectDetail $projectDetail)
    {
        $images = Image::all();

        return view('page.edit_project_detail_image', compact('images', 'page', 'projectDetail'));
    }

    public function updateImage(Page $page, ProjectDetail $projectDetail)
    {
        $projectDetail->update(request()->all());

        session()->flash('message', 'Project Detail Image successfully updated!');
        session()->flash('alert-class', 'alert-info');

        return redirect(route('pages.show', $page));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProjectDetail  $projectDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page, ProjectDetail $projectDetail)
    {
        $projectDetail->delete();

        session()->flash('message', 'Project Detail successfully deleted!');
        session()->flash('alert-class', 'alert-danger');

        return back();
    }
}
