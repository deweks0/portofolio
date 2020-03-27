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
            ['title' => 'Project 1'],
            ['title' => 'Project 2'],
            ['title' => 'Project 3'],
            ['title' => 'Project 4'],
            ['title' => 'Project 5'],
            ['title' => 'Project 6'],
            ['title' => 'Project 7'],
            ['title' => 'Project 8'],
            ['title' => 'Project 9'],
            ['title' => 'Index'],
            [
                'title' => 'About Lab',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus soluta voluptates doloremque? Similique eum unde cum ut reiciendis consectetur accusantium.
                        Lorem or Nothing
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officia delectus aliquam at. Assumenda amet numquam vel explicabo accusamus voluptas nisi eligendi repellat eius labore doloruma quae aspernatur modi quo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, excepturi at! Corporis debitis dicta illo voluptas ea.
                        Lorem or Nothing
                        Magnam ducimus natus deserunt esse autem in amet facilis exercitationem corrupti ipsa quisquam? Fugiat in sint possimus delectus voluptates ipsum labore non, suscipit, distinctio quae facere eos repellat. Consectetur, nulla voluptas architecto repellendus officia eos, delectus vero quia rem deserunt eligendi inventore! Du Lorem ipsum dolor sit amet consectetur adipisicing elit. Error nobis tempora, vitae accusamus porro quo id magni consequuntur sapiente doloribus soluta, quibusdam commodi. Ipsa, dolore. Perferendis quaerat libero quasi saepe.',
                'left_description' => 'Company Name
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat voluptatibus consectetur similique omnis fugit repellat magni quam provident, dolores dolor quos corporis neque non eaque hic ab officiis minus sit.',
                'right_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius hic culpa incidunt, optio corporis quaerat?'
            ],
            [
                'title' => 'News Update',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe eos doloribus quis, culpa iusto unde sunt quam quas nemo. Accusamus dolor impedit repellendus praesentium debitis eum repudiandae laudantium suscipit possimus cumque? Atque maiores quaerat, quae ipsam aut expedita consequatur tempore pariatur aperiam eligendi.'
            ],
            [
                'title' => 'Inquiries',
                'description' => 'For enquiries lor sit amet consectetur adipisicing elit. Saepe eos doloribus quis, culpa iusto unde sunt quam quas nemo. Accusamus dolor impedit repellendus praesentium debitis eum repudiandae laudantium suscipit possimus cumque? Atque maiores quaerat, quae ipsam aut expedita '
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
