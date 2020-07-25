<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arNews = News::all();
        return view('admin.news', compact('arNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $news = new News;
        $news->title = $request->title;
        $news->content = $request->news_content;
        $news->is_flash_news = $request->is_flash_news;
        if ($request->is_flash_news) {
            if ($news->flash_news_end_time) {
                $news->flash_news_end_time = $request->flash_news_end_time;
            } else {
                $datetime = new \DateTime('now');
                $datetime->modify('+30 day');
                $news->flash_news_end_time = $datetime->format('Y-m-d 00:00:00');
            }
        } else {
            $news->flash_news_end_time = null;
        }
        if($request->hasFile('news_pdf')){
            $pdf = $request->news_pdf;
            $extension = $pdf->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $pdf->move('storage/pdf/news', $filename);
            $news->pdf_url = $filename;
        }
        $news->save(); 
        return redirect(route('news.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news =  News::where('id', $id)->first();
        return view('admin.edit-news', compact('news'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->news_content;
        $news->is_flash_news = $request->is_flash_news;
        if ($request->is_flash_news) {
            if ($news->flash_news_end_time) {
                $news->flash_news_end_time = $request->flash_news_end_time;
            } else {
                $datetime = new \DateTime('now');
                $datetime->modify('+30 day');
                $news->flash_news_end_time = $datetime->format('Y-m-d 00:00:00');
            }
        } else {
            $news->flash_news_end_time = null;
        }
        if($request->hasFile('news_pdf')){
            if ($news->pdf_url) {
                Storage::delete('/public/pdf/news/' . $news->pdf_url);
            }
            $pdf = $request->news_pdf;
            $extension = $pdf->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $pdf->move('storage/pdf/news', $filename);
            $news->pdf_url = $filename;
        }

        $news->save(); 
       
        return redirect(route('news.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $pdf_url = $news->pdf_url;
        $news->delete();
        if ($pdf_url) {
            Storage::delete('/public/pdf/news/' . $pdf_url);
        }
        return redirect(route('news.index'));
    }
}
