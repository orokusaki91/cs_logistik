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
        // dimensionsToCheck();
        // dd();
    	// if ($request->has('image_1')) {
    	// 	$this->validate($request, [
	    //         'image_1' => 'dimensions:min_width=1920,min_height=1080'
	    //     ]);
    	// }

    	$pageContents = PageContent::where('page_id', $request->page_id)->get();
        $slug = Page::where('id', $request->page_id)->value('slug');

    	foreach ($pageContents as $key => $pageContent) {
    		$key = $key+1;
    		$title = 'title_' . $key;
    		$image = 'image_' . $key;
    		$image = uploadImage($request->$image, 'public/uploads/' . $slug);
    		$text = 'text_' . $key;
    		$pageContentUpdate = PageContent::findOrFail($pageContent->id);
    		$pageContentUpdate->title = $request->$title;
    		$pageContentUpdate->image = $image ? $image : $pageContentUpdate->image;
    		$pageContentUpdate->text = $request->$text;
    		$pageContentUpdate->save();
    	}

    	return redirect()->action('AdminController@getPage', ['page' => $slug]);
    }

    public function createService()
    {
        $pages = Page::all();
        return view('admin.pages.services_new', compact('pages'));
    }

    public function storeService(Request $request)
    {
        // if ($request->has(image_1)) {
        //  $this->validate($request, [
        //         'image_1' => 'dimensions:min_width=1920,min_height=1080'
        //     ]);
        // }

        $servicesCount = PageContent::where('page_id', 4)->count();

        if ($servicesCount >= 5) {
            return redirect()->action('AdminController@getPage', ['page_slug' => 'services'])->with('error', 'Sie haben die max. Anzahl erlaubten Seiten erreicht.');
        }

        $image = uploadImage($request->image_1, 'public/uploads/services');
        $pageContentUpdate = new PageContent;
        $pageContentUpdate->page_id = 4;
        $pageContentUpdate->title = $request->title_1;
        $pageContentUpdate->image = $image ? $image : $pageContentUpdate->image;
        $pageContentUpdate->text = $request->text_1;
        $pageContentUpdate->page_code_id = 7;
        $pageContentUpdate->save();

        return redirect()->action('AdminController@getPage', ['page_slug' => 'services']);
    }

    public function editService($page_content_id)
    {
        $pages = Page::all();
        $page = Page::where('slug', 'services')->first();
        $serviceContent = PageContent::findOrFail($page_content_id);

        return view('admin.pages.services_edit', compact('pages', 'page', 'page_slug', 'serviceContent'));
    }

    public function updateService(Request $request, $page_content_id)
    {
        // if ($request->has(image_1)) {
        //  $this->validate($request, [
        //         'image_1' => 'dimensions:min_width=1920,min_height=1080'
        //     ]);
        // }

        $image = uploadImage($request->image_1, 'public/uploads/services');
        $pageContentUpdate = PageContent::findOrFail($page_content_id);
        $pageContentUpdate->title = $request->title_1;
        $pageContentUpdate->image = $image ? $image : $pageContentUpdate->image;
        $pageContentUpdate->text = $request->text_1;
        $pageContentUpdate->save();

        return redirect()->action('AdminController@getPage', ['page_slug' => 'services']);
    }

    public function deleteService(Request $request, $page_content_id)
    {
        $service = PageContent::findOrFail($page_content_id);
        $service->delete();
        return redirect()->action('AdminController@getPage', ['page_slug' => 'services']);
    }
}
