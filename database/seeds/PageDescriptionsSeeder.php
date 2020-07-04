<?php

use App\PageDescription;
use Illuminate\Database\Seeder;

class PageDescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageDescriptions = [
            [
                'page_id' => 32,
                'description_type' => 'main',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 32,
                'description_type' => 'left',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 32,
                'description_type' => 'right',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 32,
                'description_type' => 'optional_left',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 32,
                'description_type' => 'optional_right',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 33,
                'description_type' => 'main',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => 34,
                'description_type' => 'main',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
        ];

        for ($i = 1; $i <= 30; $i++) {
            foreach ($this->projects($i) as $pageDescription) {
                PageDescription::create($pageDescription);
            }
        }

        foreach ($pageDescriptions as $pageDescription) {
            PageDescription::create($pageDescription);
        }
    }

    public function projects($id)
    {
        return [
            [
                'page_id' => $id,
                'description_type' => 'left',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
            [
                'page_id' => $id,
                'description_type' => 'right',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic quod, repudiandae voluptas quam expedita veniam dolores totam nam excepturi deleniti eos labore amet nulla magni saepe maxime, unde illo harum!'
            ],
        ];
    }
}
