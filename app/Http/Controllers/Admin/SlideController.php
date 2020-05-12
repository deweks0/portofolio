<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        $slides = Slide::take(13)->get();

        $slides->each(function ($slide) {
            $this->updatePerContent($slide->name);
        });

        session()->flash('message', 'Slider ' . request('slider_id') . ' content successfully updated!');
        session()->flash('alert-class', 'alert-success');

        return redirect(route('pages.index'));
    }

    private function updatePerContent($name)
    {
        $slide = Slide::where('slider_id', request('slider_id'))->where('name', $name)->first();

        if (request($name)) {
            $slide->update([
                'description' => request($name),
                'content' => request($name . '_content')
            ]);
        } else {
            $slide->update([
                'description' => '',
                'content' => ''
            ]);
        }
    }

    public function updateSlide()
    {
        $slides = Slide::take(13)->get();

        $slides->each(function ($slide) {
            $this->updatePerImage($slide->name);
        });

        session()->flash('message', 'Slider Images successfully updated!');
        session()->flash('alert-class', 'alert-success');

        return back();
    }

    private function updatePerImage($name)
    {
        $slide = Slide::where('slider_id', request('slider_id'))->where('name', $name)->first();

        $slide->images()->sync(request($name));
    }
}
