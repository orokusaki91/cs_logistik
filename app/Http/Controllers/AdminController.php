<?php

namespace App\Http\Controllers;

use App\Page;
use App\PageCode;
use App\PageContent;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function index()
    {
    	$pages = Page::all();
    	return view('admin.dashboard', compact('pages'));
    }

    public function getPage($page_slug)
    {
    	$pages = Page::all();
    	$page = Page::where('slug', $page_slug)->first();
    	$pageContents = PageContent::where('page_id', $page->id)->get()->toArray();

    	return view('admin.pages.' . $page_slug, compact('pages', 'page', 'page_slug', 'pageContents'));
    }

    public function postPage(Request $request)
    {
    	// if ($request->has(image_1)) {
    	// 	$this->validate($request, [
	    //         'image_1' => 'dimensions:min_width=1920,min_height=1080'
	    //     ]);
    	// }
    	$pageContents = PageContent::where('page_id', $request->page_id)->get();
    	foreach ($pageContents as $key => $pageContent) {
    		$key = $key+1;
    		$title = 'title_' . $key;
    		$image = 'image_' . $key;
    		$image = uploadImage($request->$image, 'uploads/home');
    		$text = 'text_' . $key;
    		$pageContentUpdate = PageContent::findOrFail($pageContent->id);
    		$pageContentUpdate->title = $request->$title;
    		$pageContentUpdate->image = $image;
    		$pageContentUpdate->text = $request->$text;
    		$pageContentUpdate->save();
    	}
    	return redirect()->back();
    }
}
