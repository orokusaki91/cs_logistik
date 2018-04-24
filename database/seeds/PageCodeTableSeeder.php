<?php

use App\PageCode;
use Illuminate\Database\Seeder;

class PageCodeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pageCode = new PageCode;
        $pageCode->name = 'home_header';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'home_footer1';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'home_footer2';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'home_footer2';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'about_us';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'slogan';
        $pageCode->save();

        $pageCode = new PageCode;
        $pageCode->name = 'services';
        $pageCode->save();
    }
}
