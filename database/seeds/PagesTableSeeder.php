<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            ['title' => 'Home'],
            [
                'title' => 'About Lab'
            ],
            [
                'title' => 'News Update'
            ],
            [
                'title' => 'Inquiries'
            ]
        ];

        for ($i = 1; $i <= 30; $i++) {
            Page::create($this->slider($i));
        }

        foreach ($pages as $page) {
            Page::create($page);
        }
    }

    public function slider($id)
    {
        return
            ['title' => 'Project ' .  $id];
    }
}
