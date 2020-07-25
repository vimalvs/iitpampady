<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\GalleryImage;
use Illuminate\Support\Facades\Storage;
use Validator;

class GalleryController extends Controller
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
        $arGallery = Gallery::all();
        return view('admin.gallery', compact('arGallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-gallery');
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
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gallery = new Gallery;
        $gallery->title = $request->title;
        
        if($request->hasFile('thumbnail')){
            $image = $request->thumbnail;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/gallery/thumbnail', $filename);
            $gallery->thumbnail = $filename;
        }
        $gallery->save(); 
        return redirect(route('gallery.edit', $gallery->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galleryImages =  Gallery::find($id)->photos;
        $gallery =  Gallery::where('id', $id)->first();
        return view('admin.edit-gallery', compact('gallery', 'galleryImages'));
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

        $gallery = Gallery::find($id);
        $gallery->title = $request->title;
        if($request->hasFile('thumbnail')){
            Storage::delete('/public/images/gallery/thumbnail/' . $gallery->thumbnail);
            $image = $request->thumbnail;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/gallery/thumbnail', $filename);
            $gallery->thumbnail = $filename;
        }

        $gallery->save(); 
       
        return redirect(route('gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $galleryImages =  Gallery::find($id)->photos;
        $gallery->delete();
        Storage::delete('/public/images/gallery/thumbnail/' . $gallery->thumbnail);
        if ($galleryImages) {
            foreach ($galleryImages as $image) {
                Storage::delete('/public/images/gallery/uploads/' . $image->image_pathname);
            }
        }
        return redirect(route('gallery.index'));
    }

    public function uploadImage(Request $request) {
        $validation = Validator::make($request->all(), [
            'gallery_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery_id' => 'required',
        ]);

        if ($validation->passes()) {
            $image = $request->gallery_image;
            $gallery_id = $request->gallery_id;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/gallery/uploads', $filename);
            $galleryImage = new GalleryImage();
            $galleryImage->gallery_id = $gallery_id;
            $galleryImage->image_pathname = $filename;
            $galleryImage->save(); 
            return response()->json([
                'message' => 'Image Uploaded Successfully',
                'uploaded_image' => '<img src = "/storage/images/gallery/uploads/'.$filename.'">',
                'class_name' => 'alert-success',
                'id' => $galleryImage->id
            ]);
        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger'
            ]);
        }
    }

    public function destroyImage($id)
    {
        $galleryImage = GalleryImage::find($id);
        if (!$galleryImage) {
             return response()->json([
                'message' => 'Image Not Found In Database',
                'class_name' => 'alert-danger',
            ]);
        } else {
            Storage::delete('/public/images/gallery/uploads/' . $galleryImage->image_pathname);
            $galleryImage->delete();
            return response()->json([
                'message' => 'Image Deleted Successfully',
                'class_name' => 'alert-success',
            ]);
        }
    }
}
