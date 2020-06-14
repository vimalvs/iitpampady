<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function courses()
    {
        return view('courses');
    }

    public function course(){
        //$project = Project::where('id', $project->id)->first();
        //return view('user.project', compact('project'));
        return view('course');
    }

    public function galleryHome()
    {
        return view('gallery-home');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function newsHome()
    {
        return view('news-home');
    }
    public function contact()
    {
        return view('contact');
    }
}
