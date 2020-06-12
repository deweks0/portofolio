<?php

namespace App\Http\Controllers;

use App\Page;
use App\Slide;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $images = Page::findOrFail(10)->load('images')->images;
        $slideOne = Slide::with('images')->where('slider_id', 1)->get();
        $slideTwo = Slide::with('images')->where('slider_id', 2)->get();
        $slideThree = Slide::with('images')->where('slider_id', 3)->get();

        foreach (Slide::where('name', 'LIKE', '%' . 'project' . '%')->get() as $slide) {
            if (count($slide->images) === 0) {
                abort(500, 'Image Not Set');
            }
        }

        if (now()->second <= 20) {
            $randomSlide = collect([
                'main.partials.slide_1',
                'main.partials.slide_2',
                'main.partials.slide_3'
            ]);
        } else if (now()->second >= 21 && now()->second <= 40) {
            $randomSlide = collect([
                'main.partials.slide_2',
                'main.partials.slide_1',
                'main.partials.slide_3'
            ]);
        } else {
            $randomSlide = collect([
                'main.partials.slide_3',
                'main.partials.slide_2',
                'main.partials.slide_1'
            ]);
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
        $page = Page::find(11)->load('images');

        if (count($page->images) === 0) {
            abort(500, 'Image Not Set');
        }

        return view('main.about', compact('page'));
    }

    public function inquiries()
    {
        $page = Page::find(13);

        return view('main.inquiries', compact('page'));
    }

    public function news()
    {
        $page = Page::find(12);

        return view('main.news', compact('page'));
    }

    public function detailProject(Page $page)
    {
        $page->load('projectDetails');

        return view('main.detail', compact('page'));
    }
}
