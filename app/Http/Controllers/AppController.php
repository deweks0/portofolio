<?php

namespace App\Http\Controllers;

use App\Page;
use App\Slide;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $images = Page::where('title', 'LIKE', '%home%')->first()->load('images')->images;
        $slideOne = Slide::with('images')->where('slider_id', 1)->get();
        $slideTwo = Slide::with('images')->where('slider_id', 2)->get();
        $slideThree = Slide::with('images')->where('slider_id', 3)->get();
        $randomSlide = collect([
            'main.partials.slide_1',
            'main.partials.slide_2',
            'main.partials.slide_3'
        ]);

        foreach (Slide::where('name', 'LIKE', '%' . 'project' . '%')->get() as $slide) {
            if (count($slide->images) === 0) {
                abort(500, 'Image Not Set');
            }
        }

        return view('main.index', compact(
            'images',
            'slideOne',
            'slideTwo',
            'slideThree',
            'randomSlide'
        ));
    }

    public function about()
    {
        $page = Page::where('title', 'LIKE', '%about%')->first()->load('images');
        $imagePerSlide = count($page->images) / 3;

        if (count($page->images) === 0) {
            abort(500, 'Image Not Set');
        }

        return view('main.about', compact('page', 'imagePerSlide'));
    }

    public function inquiries()
    {
        $page = Page::where('title', 'LIKE', '%inquiries%')->first();

        return view('main.inquiries', compact('page'));
    }

    public function news()
    {
        $page = Page::where('title', 'LIKE', '%news%')->first();

        return view('main.news', compact('page'));
    }

    public function detailProject(Page $page)
    {
        $page->load('projectDetails');

        return view('main.detail', compact('page'));
    }
}
