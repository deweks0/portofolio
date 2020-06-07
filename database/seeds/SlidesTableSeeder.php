<?php

use App\Slide;
use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slides = $this->slider(1);

        foreach ($slides as $slide) {
            Slide::create($slide);
        }

        $slides = $this->slider(2);

        foreach ($slides as $slide) {
            Slide::create($slide);
        }

        $slides = $this->slider(3);

        foreach ($slides as $slide) {
            Slide::create($slide);
        }
    }

    public function slider($id)
    {
        return [
            [
                'slider_id' => $id,
                'name' => 'website_name'
            ],
            [
                'slider_id' => $id,
                'name' => 'website_info'
            ],
            [
                'slider_id' => $id,
                'name' => 'inquiries'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_one'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_two'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_three'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_four'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_five'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_six'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_seven'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_eight'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_nine'
            ],
            [
                'slider_id' => $id,
                'name' => 'project_ten'
            ]
        ];
    }
}
