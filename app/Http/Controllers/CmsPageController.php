<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmsPage;

class CmsPageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() 
    {
        return view('admin.manage-page');
    }

    public function view($id) 
    {
        $page =  CmsPage::where('id', $id)->first();
        return view('admin.edit-page', compact('page'));
    }

    public function update(Request $request, $id)
    {
    	$page = CmsPage::find($id);
    	$page->content = $request->page_content;
        $page->save(); 
       
        return redirect(route('page.index'));
    }

}
