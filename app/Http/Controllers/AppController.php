<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('main.index');
    }

    public function about()
    {
        $page = Page::find(11)->load('images');

        return view('main.about', compact('page'));
    }

    public function inquiries()
    {
        return view('main.inquiries');
    }

    public function news()
    {
        $page = Page::find(12);

        return view('main.news', compact('page'));
    }

    public function detailProject(Page $page)
    {
        return view('main.detail', compact('page'));
    }
}
