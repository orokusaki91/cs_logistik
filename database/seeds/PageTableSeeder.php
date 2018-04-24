<?php

use App\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new Page;
        $page->name = 'Home';
        $page->slug = 'home';
        $page->save();

        $page = new Page;
        $page->name = 'Über uns';
        $page->slug = 'about_us';
        $page->save();

        $page = new Page;
        $page->name = 'Slogan';
        $page->slug = 'slogan';
        $page->save();

        $page = new Page;
        $page->name = 'Dienstleistungen';
        $page->slug = 'services';
        $page->save();
    }
}
