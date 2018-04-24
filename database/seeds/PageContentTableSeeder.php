<?php

use App\PageContent;
use Illuminate\Database\Seeder;

class PageContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->page_code_id = 1;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Kompetent';
        $pageContent->page_code_id = 2;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Partnerschaftlich';
        $pageContent->page_code_id = 3;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 1;
        $pageContent->title = 'Effizient';
        $pageContent->page_code_id = 4;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 2;
        $pageContent->page_code_id = 5;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 3;
        $pageContent->page_code_id = 6;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->title = 'Transport Schweiz';
        $pageContent->page_code_id = 7;
        $pageContent->save();

        $pageContent = new PageContent;
        $pageContent->page_id = 4;
        $pageContent->title = 'Lagerung';
        $pageContent->page_code_id = 7;
        $pageContent->save();
    }
}
