<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Committee;
use Validator;
use Illuminate\Support\Facades\Storage;


class AdministrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$arPosition = [1 => 'Manager', 2 => 'Secretary', 3 => 'Principal',  4 => 'Trustee', 5 => 'Board Member'];
        $arMembers =  Committee::all();
        return view('admin.manage-board-members', compact('arMembers', 'arPosition'));
    }

    public function store(Request $request) {
    	$validation = Validator::make($request->all(), [
            'member_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required',
            'position' => 'required'
        ]);

        if ($validation->passes()) {
        	$arPosition = [1 => 'Manager', 2 => 'Secretary', 3 => 'Principal',  4 => 'Trustee', 5 => 'Board Member'];
            $image = $request->member_image;
            $extension = $image->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $image->move('storage/images/committee', $filename);
            $committee = new Committee();
            $committee->position = $request->position;
            $committee->name = $request->name;
            $committee->image = $filename;
            $committee->save(); 
            return response()->json([
                'message' => 'Member Details Added Successfully',
                'uploaded_image' => '<img src = "/storage/images/committee/'.$filename.'">',
                'status' => true,
                'class_name' => 'alert-success',
                'id' => $committee->id,
                'name' => $committee->name,
                'position' => $arPosition[$committee->position]
            ]);
        } else {
            return response()->json([
                'message' => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name' => 'alert-danger',
                'status' => false
            ]);
        }
    }

    public function destroy($id) {
    	$member = Committee::find($id);
        if (!$member) {
             return response()->json([
                'message' => 'Member Details Not Found In Database',
                'class_name' => 'alert-danger',
            ]);
        } else {
            Storage::delete('/public/images/committee/' . $member->image);
            $member->delete();
            return response()->json([
                'message' => 'Member Details Deleted Successfully',
                'class_name' => 'alert-success',
            ]);
        }
    }
}
