<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Banner;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
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
        $courses = Course::all();
        return view('admin.course', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-course');
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
            'name' => 'required|unique:course',
            'course_description' => 'required',
        ]);

        $course = new Course;
        $course->name = $request->name;
        $course->pathname = self::slugify($request->name);
        $course->description = $request->course_description;

        if($request->hasFile('thumbnail')){
            $image = $request->thumbnail;
            $extension = $image->getClientOriginalExtension();
            $filename = $course->pathname.'.'.$extension;
            $image->move('storage/images/course', $filename);
            $course->thumbnail = $filename;
        }
        $course->save(); 
        return redirect(route('course.index'));
    
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
        $course =  Course::where('id', $id)->first();
        return view('admin.edit-course', compact('course'));
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
            'name' => 'required',
            'course_description' => 'required',
        ]);

        $course = Course::find($id);
        $course->name = $request->name;
        $course->description = $request->course_description;
        if($request->hasFile('thumbnail')){
            if ($course->thumbnail) {
                Storage::delete('/public/images/course/' . $course->thumbnail);
            }
            $image = $request->thumbnail;
            $extension = $image->getClientOriginalExtension();
            $filename = $course->pathname.'.'.$extension;
            $image->move('storage/images/course', $filename);
            $course->thumbnail = $filename;
        }

        $course->save(); 
       
        return redirect(route('course.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id)->toArray();
        Course::where('id', $id)->delete();
        $arBannerImage =  Banner::where('category', $course['pathname'])->get();
        if ($arBannerImage) {
            $arBannerImage = $arBannerImage->toArray();
            foreach ($arBannerImage as $banner_image) {
                $banner = Banner::find($banner_image['id']);
                $bannerData = $banner->toArray();
                $status = Storage::delete('/public/images/banner/' . $banner['pathname']);
                $banner->delete();
            }
        }
        if ($course['thumbnail']) {
            Storage::delete('/public/images/course/' . $course['thumbnail']);
        }

        return redirect(route('course.index'));
    }

    public static function slugify($text)
    {
      // replace non letter or digits by -
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);

      // transliterate
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

      // remove unwanted characters
      $text = preg_replace('~[^-\w]+~', '', $text);

      // trim
      $text = trim($text, '-');

      // remove duplicate -
      $text = preg_replace('~-+~', '-', $text);

      // lowercase
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }

}
