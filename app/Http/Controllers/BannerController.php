<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Course;
use Validator;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function banner() 
    {
        $arCourse = Course::select('name','pathname')->get();
        $arSection = ['Home' => ['home', '/']];
        foreach ($arCourse as $course) {
            $arSection[$course->name] = [$course->pathname, '/courses/'.$course->pathname];
        }
        return view('admin.manage-banner', compact('arSection'));
    }

    public function index($section)
    {
        $arBannerImage =  Banner::where('category', $section)->get()->toArray();
        return view('admin.banner', compact('arBannerImage', 'section'));
    }

    public function store(Request $request) {
        $validation = Validator::make($request->all(), [
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validation->passes()) {
            $image = $request->banner_image;
            $category = $request->category;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/banner', $filename);
            $banner = new Banner();
            $banner->category = $category;
            $banner->pathname = $filename;
            $banner->save(); 
            return response()->json([
                'message' => 'Image Uploaded Successfully',
                'uploaded_image' => '<img src = "/storage/images/banner/'.$filename.'">',
                'class_name' => 'alert-success',
                'id' => $banner->id
            ]);
        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger'
            ]);
        }
    }

    public function destroy($id)
    {

        $banner = Banner::find($id);
        if (!$banner) {
             return response()->json([
                'message' => 'Image Not Found In Database',
                'class_name' => 'alert-danger',
            ]);
        } else {
            $bannerData = $banner->toArray();
            $status = Storage::delete('/public/images/banner/' . $banner['pathname']);
            $banner->delete();
            return response()->json([
                'message' => 'Image Deleted Successfully',
                'class_name' => 'alert-success',
            ]);
        }
        
    }
}
