<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Course;
use App\Gallery;
use App\News;
use App\CmsPage;
use App\Committee;
use App\Company;
use App\Message;
use App\Mail\Email;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arBannerImage =  Banner::where('category', 'home')->get()->toArray();
        $date = Carbon::today();
        $arFlashNews = News::where('is_flash_news', 1)->whereDate('flash_news_end_time', '>=', $date)->get();
        if ($arFlashNews) {
             $flashNews = [];
            foreach ($arFlashNews as $news) {
                $flashNews[] = $news->title;
            }
            $flashNews = implode(' | ', $flashNews);
        } else {
            $flashNews = '';
        }
       
        return view('home', compact('arBannerImage', 'flashNews'));
    }

    public function about()
    {
        $content = CmsPage::where('page', 'about-us')->first();
        $arPosition = [1 => 'Manager', 2 => 'Secretary', 3 => 'Principal',  4 => 'Trustee', 5 => 'Board Member'];
        $arMembers =  Committee::all();
        $committee = [];
        foreach ($arMembers as $member) {
            $committee[$arPosition[$member->position]][] = $member;
        }
        return view('about', compact('content', 'committee'));
    }

    public function courses()
    {
        $courses = Course::all('name', 'pathname','thumbnail');
        return view('courses', compact('courses'));
    }

    public function course($pathname){
        $course = Course::where('pathname', $pathname)->first();
        if (!$course) {
            return abort(404);
        }
        $arBannerImage =  Banner::where('category', $pathname)->get();
        return view('course', compact('course', 'arBannerImage'));
    }

    public function galleryHome()
    {
        $arGallery = Gallery::orderBy('id', 'DESC')->get();
        return view('gallery-home', compact('arGallery'));
    }

    public function gallery($id)
    {
        $gallery = Gallery::find($id);
        if (!$gallery) {
            return abort(404);
        }
        $galleryImages =  Gallery::find($id)->photos;
        return view('gallery', compact('gallery', 'galleryImages'));
    }

    public function newsHome()
    {
        $arNews = News::whereNotNull('content')->orWhereNotNull('pdf_url')->orderBy('id', 'DESC')->get();
        return view('news-home', compact('arNews'));
    } 
    public function news($id)
    {
        $news = News::find($id);
        if (!$news) {
            return abort(404);
        }
        return view('news', compact('news'));
    }
    
    public function placement()
    {
        $content = CmsPage::where('page', 'placement')->first();
        $arCompany = Company::all();
        return view('placement', compact('content', 'arCompany'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactInput(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|min:10|numeric',
            'message' => 'required'
        ]);

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone_number = $request->phone_number;
        $message->message = $request->message;
    
        $message->save(); 
        \Mail::to('padiyaraanju@gmail.com')->queue(new Email($message));
        return redirect()->back()->with(['message' => 'Thank you for connecting us. We will contact ASAP!']);
    }
}
