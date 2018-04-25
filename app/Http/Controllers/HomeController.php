<?php

namespace App\Http\Controllers;

use App\PageContent;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeHeader = PageContent::where('page_code_id', 1)->first();
        $homeFooter1 = PageContent::where('page_code_id', 2)->first();
        $homeFooter2 = PageContent::where('page_code_id', 3)->first();
        $homeFooter3 = PageContent::where('page_code_id', 4)->first();
        $aboutUs = PageContent::where('page_code_id', 5)->first();
        $slogan = PageContent::where('page_code_id', 6)->first();
        $services = PageContent::where('page_code_id', 7)->get();

        return view('index', compact('homeHeader', 'homeFooter1', 'homeFooter2', 'homeFooter3', 'aboutUs', 'slogan', 'services'));
    }
}
